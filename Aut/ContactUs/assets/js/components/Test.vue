<template>

    <v-container fluid grid-list-md class="pa-0 ma-0">
        <v-layout row wrap>
            <v-flex >
                <data-table
                        ref="polls"
                        source="polls"
                        @addpolls="addPolling()"
                        @editpolls="editPolls"
                        @stopVoter="stopVoter"
                        @resultVoter="resultVoter"
                        @resumeVoter="resumeVoter"
                />
                <data-table source="options" />


                <div class="text-xs-center">
                    <v-dialog
                            v-model="dialog"
                            width="500"
                    >


                        <v-card>
                            <v-card-title
                                    class="headline green lighten-2  justify-center"
                                    success-title
                            >
                                {{title_result}}
                            </v-card-title>
                            <v-layout row wrap v-if="result != 'error'" class="justify-center">
                                <v-card-text  v-for="(res, index) in result" :key="res.name">

                                    <h1>{{res.name}} :</h1>
                                    <v-progress-linear
                                            :value="res.percent"
                                            height="25"
                                            color="blue-grey"
                                            class="text-center"

                                    >
                                        {{res.percent}}%
                                    </v-progress-linear>
                                    <br >
                                </v-card-text>
                            </v-layout>
                            <v-layout row wrap v-else class="vProgress">
                                <v-card-text >
                                    can not see this result
                                </v-card-text>
                            </v-layout >

                            <v-divider></v-divider>

                            <v-card-actions class=" justify-center">
                                <v-spacer></v-spacer>
                                <v-btn
                                        color="success"
                                        flat
                                        @click="dialog = false"
                                >
                                    {{translate('agree')}}
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </div>

            </v-flex>


            <!-- <create-polling></create-polling> -->
        </v-layout>
        <v-dialog
                v-model="create_polls_dailog"
                max-width="290"
                fullscreen
                class="d-flex flex-row  justify-center mb-8"

        >
            <v-card class=" justify-center">
                <v-card-title class="headline justify-center">Polling</v-card-title>

                <v-card-text class="  justify-center " >
                    <v-form ref="form" v-model="valid" lazy-validation>
                        <v-layout wrap row  class="justify-center"  >
                            <div v-for=" item , key in struct" :key="key" class="flex md3 sm6  wrap row"  :class="{'md12 sm12':struct[key].flexable}" v-if="!struct[key].hidden">
                                <v-flex v-if="!struct[key].hidden"></v-flex>
                                <!-- state id -->
                                <v-flex v-if='struct[key].type == "id" '>
                                    {{struct[key]}}
                                </v-flex>
                                <!-- state text_title -->
                                <v-flex md12 v-else-if="struct[key].type == 'text_title'">

                                    <v-text-field v-if=" struct[key].multilang == false" md12 outline  v-model="poll[key]" :rules="poll.rule.questionRule"  :label="translate(struct[key].label)" required>
                                    </v-text-field>
                                    <v-text-field md12 outlined  v-else v-for="local in polltrans.locales" :key="local" v-model="polltrans[local][key]" :rules="poll.rule.optionRule" :label="translate(struct[key].label)+(local=='ar'?'(العربية )':'')+(local=='en'?'(English )':'')" :class="{'text-left':local=='en'}" required></v-text-field>

                                </v-flex>

                                <!-- ----------------------date----------------------------- -->
                                <v-flex md3  v-else-if="struct[key].type == 'date' " class="DataTime" >
                                    <!-- data end -->
                                    <v-menu v-model="struct[key].show_dailog" :close-on-content-click="false" transition="scale-transition" offset-y full-width max-width="290px" min-width="290px">
                                        <template v-slot:activator="{ on }">
                                            <v-text-field v-model="poll[key]" :label="translate(struct[key].label)" persistent-hint :rules="poll.rule.startAtRule" readonly v-on="on"></v-text-field>
                                        </template>
                                        <v-date-picker v-model="poll[key]" :label="translate(struct[key].label)" @input="struct[key].show_dailog = false"></v-date-picker>
                                    </v-menu>

                                </v-flex>
                                <!-- -----------------------time--------------------------------- -->
                                <v-flex  md3 v-else-if="struct[key].type == 'time' ">
                                    <!-- time end -->

                                    <v-menu
                                            :ref="key"
                                            v-model="struct[key].show_dailog"
                                            :close-on-content-click="false"
                                            :nudge-right="40"
                                            lazy
                                            transition="scale-transition"
                                            offset-y
                                            full-width
                                            max-width="290px"
                                            min-width="290px"
                                    >
                                        <template v-slot:activator="{ on }">
                                            <v-text-field
                                                    :value="poll[key]"
                                                    :label="translate(struct[key].label)"
                                                    prepend-icon="access_time"
                                                    readonly
                                                    v-on="on"
                                            ></v-text-field>
                                        </template>
                                        <v-time-picker
                                                v-if="struct[key].show_dailog"
                                                v-model="poll[key]"
                                                full-width
                                                @click:minute="saveTime(poll[key],key)"
                                        ></v-time-picker>
                                    </v-menu>
                                </v-flex>
                                <!-- -----------------------checkbox--------------------------------- -->
                                <!-- allow to visitior -->
                                <v-flex md6 sm12 v-else-if="struct[key].type == 'checkbox' ">

                                    <v-checkbox class="d-flex " v-model="poll[key]" :label="translate(struct[key].label)" required></v-checkbox>
                                </v-flex>

                                <!-- -------------------------select---------------------------------------------- -->
                                <v-flex md12 v-else-if="struct[key].type =='select'">
                                    <v-select
                                            v-model="poll[key]"
                                            :items="struct[key].item_is_function? struct[key].items(): struct[key].items"
                                            :rules="[v => !!v || 'Item is required']"
                                            :label="translate(struct[key].label)"
                                            required

                                    ></v-select>
                                </v-flex>
                                <!-- --------------------text more filed ------------------------------>
                                <v-flex md12 wrap row v-else-if="struct[key].type =='text' && struct[key].plusable === true" >
                                    <v-flex md12 wrap row v-if="struct[key].multilang == false">
                                        <v-flex  md12 wrap row>
                                            <v-btn  icon   color="white" @click="addOption(key)">
                                                <v-icon >add</v-icon>
                                            </v-btn>
                                        </v-flex>
                                        <v-layout wrap row class="justify-center" v-for="(option,i)  in poll[key]"  :key="i">
                                            <v-flex>
                                                <v-btn md1  wrap row icon   color="white" @click="removeOption(key,i)">
                                                    <v-icon >remove</v-icon>
                                                </v-btn>
                                            </v-flex>
                                            <v-flex md11  wrap row>
                                                <v-text-field md10 v-model="poll[key][i]" :rules="poll.rule.optionRule"

                                                              :label="translate(struct[key].label)"

                                                              required></v-text-field>
                                            </v-flex>
                                        </v-layout>

                                    </v-flex>
                                    <v-flex v-else>
                                        <v-flex  md12 wrap row>
                                            <v-btn  icon   color="white" @click="addOptionMultilang(key)">
                                                <v-icon >add</v-icon>
                                            </v-btn>
                                        </v-flex>
                                        <v-flex  md12 wrap row v-for="(option,i)  in polltrans.en[key]"  :key="i">
                                            <v-layout  wrap row class="justify-center" v-for="local in polltrans.locales" :key="local">
                                                <!-- {{local}}{{'  key  '+key}}{{'i'+ i}} -->
                                                <v-flex>
                                                    <v-btn md1  wrap row icon   color="white" @click="removeOptionMultilang(key,i)">
                                                        <v-icon >remove</v-icon>
                                                    </v-btn>
                                                </v-flex>
                                                <v-flex md11  wrap row>
                                                    <v-text-field md12 v-model="polltrans[local][key][i]" :rules="polltrans.rule.optionRule"

                                                                  :label="translate(struct[key].label)+(local=='ar'?'(العربية )':'')+(local=='en'?'(English )':'')" :class="{'text-left':local=='en'}"

                                                                  required></v-text-field>
                                                </v-flex>
                                            </v-layout>
                                        </v-flex>

                                    </v-flex>
                                </v-flex>
                                <!-- ------------------text one --------------------->
                                <v-flex md12 v-else-if="struct[key].type =='text'">

                                    <v-text-field v-if="struct[key].multilang == false" v-model="poll[key]" :rules="poll.rule.optionRule" :label="translate(struct[key].label)" required></v-text-field>

                                    <v-text-field v-else v-for="local in polltrans.locales" :key="local" v-model="polltrans[local][key]" :rules="poll.rule.optionRule":label="translate(struct[key].label)+(local=='ar'?'(العربية )':'')+(local=='en'?'(English )':'')" :class="{'text-left':local=='en'}"  required></v-text-field>


                                </v-flex>


                            </div>
                        </v-layout>
                    </v-form>

                </v-card-text>

                <v-card-actions class="">
                    <v-spacer></v-spacer>
                    <v-btn v-if="!editing" :disabled="!valid" color="success" @click="validate">
                        {{translate('save')}}
                    </v-btn>
                    <v-btn v-else :disabled="!valid" color="success" @click="validate">
                        {{translate('edit')}}
                    </v-btn>

                    <v-btn
                            color="error"

                            @click="create_polls_dailog = false"
                    >
                        {{translate('disagree')}}
                    </v-btn>

                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-container>


</template>



<script>
    class Temp{
        constructor(){
        }
        set(key,val){
            this[key] = val;
        }

    }
    class Attr {
        constructor({type = 'text',multilang = false,plusable = false ,label = false,hidden = false,show_dailog= false,items=[],item_is_function = false , flexable = ''}){
            this.type = type;
            this.multilang = multilang;
            this.plusable = plusable;
            this.label = label;
            this.hidden = hidden;
            this.show_dailog = show_dailog;
            this.items = items;
            this.item_is_function = item_is_function;
            this.flexable = flexable;

        }
    }
    class Struct {
        constructor(data){
            for(let item in data){
                this[item] = new Attr(data[item]);
            }
            this.setFlex();
        }
        setFlex(){
            let fields = Object.assign({}, this);
            for(let key in fields){
                if((this[key].type == 'text'|| this[key].type == 'text_title'||this[key].type == 'select'||this[key].type == 'number') &&  this[key].flexable =='')

                    this[key].flexable = true;
                else
                    this[key].flexable = false;

            }
        }
    }
    class Form {
        constructor(data,rule,multilang = false,locales=['en','ar']){
            if(multilang){
                this.multilang = multilang;
                this.locales = locales;
                let vm = this;
                this.locales.forEach((key)=>{
                    vm[key] = new Temp();
                    for(let item in data){
                        vm[key].set(item,data[item]);
                        // this[item] = data[item];
                    }
                });


            }
            else{

                for(let item in data){

                    this[item] = data[item];
                }
            }
            this.rule = new Rule(rule);

        }
        set(data){
            for(let item in data){
                this[item] = data[item];
            }


        }
        appand(item , value){
            this[item] = value;
        }
        delete(field){
            delete this[field];
        }
        get(key)
        {
            return key;
        }
    }
    class Rule{
        constructor(data){
            for(let item in data){
                this[item] = data[item];
            }

        }
    }
    export default {


        name:'Polls',
        data () {
            return {
                create_polls_dailog: false,
                dialog: false,
                result:'no thing',
                title_result:'',
                rotate: 360,
                color:['#86BE3C','#E4B645','#C33734','#748EC4','#Black'],
                valid: true,
                name: '',
                polltrans : new Form({
                    question:'',
                    options:['',''],

                },{
                    questionRule: [
                        v => !!v || 'Name is required',

                    ],
                    optionRule: [
                        v => !!v || 'Name is required',

                    ],

                },true),
                poll : new Form({
                    //field...
                    id:'',
                    starts_at:'',
                    time_start: null,
                    time_end:null,
                    ends_at:'',
                    canVisitorsVote: false,
                    canVoterSeeResult:false,
                    maxCheck:1,
                },{
                    //rule ....
                    startAtRule: [
                        v => !!v || 'data is required',
                    ],
                    endAtRule: [
                        v => !!v || 'data is required',
                    ],
                    TimeRule: [
                        v => !!v || 'time is required',
                    ],

                }),

                struct : new Struct({
                    //field...
                    id:{ type : 'number', multilang : false , hidden : true},
                    question:{type :  'text_title',multilang :  true ,plusable :  false ,label :'question'},
                    options:{type :  'text',multilang : true,plusable :  true ,label : 'options'},
                    starts_at:{type : 'date', label :'starts_at'},
                    time_start: {type : 'time' ,label : 'time_start'},
                    ends_at:{type :  'date' ,label :  'ends_at'},
                    time_end:{type :  'time',label :  'time_end'},
                    canVisitorsVote: {type :  'checkbox',label : 'allow_to_vote'},
                    canVoterSeeResult:{type :  'checkbox',label :  'allow_to_see_result'},
                    maxCheck:{type :  'select',label :  'number_option',item_is_function: true
                        ,items:()=>{ let array = [];
                            this.polltrans.en.options.forEach((v,i)=>{array.push(i+1)});
                            array.pop();
                            return array;}}
                }),

                is_multilang : true,
                locales : '',


                show_starts_at:false,
                show_time_starts_at:false,
                show_time_ends_at:false,
                show_ends_at:false,
                modal: false,
                date: new Date().toISOString().substr(0, 10),
                select: null,
                editing:false,
                array_option:[],
                // info : new Lang(this.getLocales()),


            }
        },
        components:{

        },
        computed:{

            items:function(){
                let array = [];
                this.poll.options.forEach((v,i)=>{array.push(i+1)});
                array.pop();
                return array;
            } ,

        },
        created(){
            this.getLocales();
        },
        methods:{
            saveTime(time,key){
                let test = key;
                console.log(time , test );
                this.poll[key] = time;
                // this.$refs.time_start.save(time);
            },
            //display form in dialog to add information
            addPolling(){
                this.editing =false;
                this.reset();
                this.create_polls_dailog = true;
            },
            // in state edit get name option for this poll
            //var id : mean index polls - poll_id -
            getOptions(id){
                let array = [];
                this.$http.get('getOptions/' + id).then((response) => {
                    this.array_option = [];
                    this.array_option=response.data;
                    for(let index in this.array_option)
                        array.push(this.array_option[index].name)

                });
                return array;
            },
            //get locale all lang form project
            getLocales(){
                let array ;
                this.$http.get('getLocales/').then((response) => {
                    this.locales= response.data;
                    if (this.is_multilang) {

                        this.polltrans.locales = response.data;
                    }
                    console.log('locales is :',response.data);

                    // array = response.data;
                });

                return array;
            },
            //add information to object poll
            editPolls(test){
                console.log(test);
                // editPolls({id,question , starts_at,ends_at ,canVisitorsVote ,canVoterSeeResult ,maxCheck}){

                let time_start = this.storTimeAsHour(starts_at);
                let time_end = this.storTimeAsHour(ends_at);
                starts_at = this.GetFormattedDate(starts_at);
                ends_at = this.GetFormattedDate(ends_at);
                // console.log('the function is :',this.getOptions(id));
                let options = this.getOptions(id);
                // console.log(question ,options, starts_at,ends_at ,canVisitorsVote ,canVoterSeeResult ,maxCheck,starts_at ,ends_at);
                this.poll.set({
                    id,
                    question ,
                    options,
                    starts_at,
                    ends_at ,
                    canVisitorsVote ,
                    canVoterSeeResult ,
                    maxCheck,
                    time_start,
                    time_end
                });
                this.create_polls_dailog = true;
                this.editing = true;

            },
            //to get time from date example 2020/1/1 12:10 --output--> 12:10
            storTimeAsHour(full_date){
                let time = new Date(full_date);
                let format = time.getHours() +":"+time.getMinutes();
                return format;
            },
            //to get date from full date expmple 2020/1/1 12:10 --output--> 2020/1/1
            GetFormattedDate(full_date) {
                var todayTime = new Date(full_date);
                var month = todayTime.getMonth() + 1;
                var day = todayTime.getDate();
                var year = todayTime.getFullYear();
                return  year+ "-" + month + "-" +day  ;
            },
            //to stop polls in this time pause open --output--> 2020/2/20 2:22 _mean is Closed_
            stopVoter(obj) {
                console.log(obj);
                this.$http.patch('admin/polls/'+ obj.id+'/lock/' , {}).then((response) => {
                    this.$refs.polls.fetchDataSource();
                    this.$notification.show(response.data.msg);


                });
            },
            //to run polling from close into open exmple 2020/2/20 2:22 _mean is closed_ --output--> open
            resumeVoter(obj) {
                this.$http.patch('admin/polls/'+ obj.id+'/unlock/' , {}).then((response) => {
                    this.$refs.polls.fetchDataSource();
                    this.$notification.show(response.data.msg);



                });
            },
            //to draw the result
            resultVoter(obj){
                this.$http.get('resultVoter/' + obj.id, {}).then((response) =>{

                    if(response.data != '' ){

                        this.result = response.data.options;
                        this.title_result = response.data.question;
                    }
                    else{
                        this.$notification.show('can not see the result now');
                        this.result = 'error';
                    }
                    this.dialog=true

                });
            },
            mergeWithTranslate(){
                for(let local in this.polltrans.locales)
                {
                    let index = this.polltrans.locales[local];
                    this.poll.appand(index,this.polltrans[index]);
                }
            },
            //to edit or add polling
            validate () {
                //can't edit or add if form has field not validated
                if (this.$refs.form.validate()) {

                    if(this.is_multilang)
                        this.mergeWithTranslate();

                    this.snackbar = true;
                    //merge data  and time
                    this.poll.starts_at = this.mergeDataAndTime(this.poll.starts_at,this.poll.time_start);
                    this.poll.ends_at = this.mergeDataAndTime(this.poll.ends_at,this.poll.time_end);
                    //state add new polling
                    if(this.editing === false){

                        this.$http.post('admin/polls',this.poll).then((response) => {
                            this.$refs.polls.fetchDataSource();
                            this.$notification.success(response.data.msg);
                            this.create_polls_dailog = false;
                            this.reset();

                        }).
                        catch((error) => {
                            // console.log(error.response);
                            this.resetDataAndTime();
                            this.$notification.show(error.response.data);
                        });

                    }
                    //state edit polling
                    else{
                        this.$http.patch('admin/polls/'+this.poll.id,this.poll).then((response) => {
                            this.$refs.polls.fetchDataSource();
                            this.$notification.success(response.data.msg);
                            this.create_polls_dailog = false;
                            this.reset();
                            this.editing = false;

                        }).
                        catch((error) => {
                            // console.log(error.response);
                            this.resetDataAndTime();
                            this.editing = false;
                            this.$notification.show(error.response.data);

                        });
                    }
                }
            },
            //to reset time after attamp edit or create  polling
            resetDataAndTime(){
                this.poll.time_start='';
                this.poll.time_end = '';
                this.poll.starts_at = '';
                this.poll.ends_at = '';
            },
            //merage data and time into formate ,who can store in Db
            mergeDataAndTime(data , time){
                let data_val =data;
                let time_val =time;
                let data_time_val = ""+data_val+" "+time_val+"";
                return data_time_val;
            },
            reset () {
                this.$refs.form.reset()
            },

            resetValidation () {
                this.$refs.form.resetValidation()
            },
            addOption(key){
                this.poll[key].push('');

            },
            addOptionMultilang(key){
                for(let local in this.polltrans.locales)
                {
                    let index = this.polltrans.locales[local];
                    this.polltrans[index][key].push('');
                }

            },
            removeOption(key,i){
                if(this.poll[key].length >2)
                // this.poll.options.pop();
                    this.poll[key].splice(i, 1)

            },
            removeOptionMultilang(key,i){
                for(let local in this.polltrans.locales)
                {
                    let index = this.polltrans.locales[local];

                    if(this.polltrans[index][key].length >2)
                    // this.poll.options.pop();
                        this.polltrans[index][key].splice(i, 1)
                }

            },
            translate(key) {
                return this.$t(`polling.${key}`)
            },
        },
        mounted(){
        }


    }


</script>

<style scoped>





</style>