import 'driver.js/dist/driver.min.css';
import 'axios/dist/axios.min.js';
import Driver from 'driver.js';
import Axios from 'axios';

export default {


    allData: [],

    step: {},

    steps: [],

    helper: '',

    init: function (code, tours) {
        //fetch help steps
        var req = Axios.get('Steps/' + code)
            .then(response => this.allData = response.data);
        req.then(x => tours.start());
        this.helper = code;
    },


    start: function () {
        // start tours
        window.driver = Driver;
        let tour = new driver({

            allowClose: false,
            //    update this step to see if not see .
            onDeselected: (Element) => {
                Axios({
                    method: 'post',
                    url: 'SeeStep/' + Element.node.id,
                });
            },
            onReset: (Element) => {
                   // if helper is Complete
                if (Element.node.id.toString() == this.allData[this.allData.length - 1].item_name) {
                    Axios({
                        method: 'post',
                        url: 'SetComplete/' + this.helper,
                    });


                }else {

                    Axios({
                        method: 'post',
                        url: 'NotComplete/' + this.helper + '/' + Element.node.id.toString(),
                    });

                }
            },
        });
        var Next = 'Next', Previous = 'Previous', Close = 'Close', Done = 'Done';
        if (this.allData.length != 0) {
            if (this.allData[0].locale == 'ar') {
                Next = 'التالي';
                Previous = 'السابق';
                Close = 'إغلاق';
                Done = 'تم';
            }

            for (var i = 0; i < this.allData.length; i++) {
                this.step = {
                    element: '',            // Query selector string or Node to be highlighted
                    "popover": {              // There will be no popover if empty or not given
                        "title": '',          // Title on the popover
                        "description": '',    // Body of the popover
                        "position": '',
                        "opacity": 0,     // Background opacity (0 means only popovers and without overlay)
                        "offset": 0,
                        doneBtnText: Done,       // Text on the last button
                        closeBtnText: Close,     // Text on the close button
                        nextBtnText: Next,       // Next button text
                        prevBtnText: Previous,   // Previous button text
                    },

                };

                this.step.element = '#' + this.allData[i].item_name;
                this.step.popover.title = this.allData[i].title;
                var image = (this.allData[i].image_id != null) ? "<br/><img style='  display: block;\n" +
                    "  margin-left: auto;\n" +
                    "  margin-right: auto;\n" +
                    "  width: 100%;' src='" + this.allData[i].image_path + "'/>" : '';
                this.step.popover.description = this.allData[i].description + image;
                this.step.popover.position = this.allData[i].position;
                this.step.popover.opacity = this.allData[i].opacity;
                this.step.popover.offset = this.allData[i].offset;
                this.steps[i] = this.step;


            }

            tour.defineSteps(this.steps);
            tour.start();

        }
    },

}
