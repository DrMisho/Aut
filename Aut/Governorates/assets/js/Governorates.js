import GovernoratesComponents from "./GovernoratesComponents";
import DivisionsComponents from "../../../Division/assets/js/DivisionsComponents.js";

export default [
    {path: 'InformationTypes', component: GovernoratesComponents.InformationTypes, name: 'information_types', meta: {breadcrumbs: false}},
    {path: 'AdditionalInformations', component: GovernoratesComponents.AdditionalInformations, name: 'additional_informations', meta: {breadcrumbs: false}},
    {path: 'Governors', component: GovernoratesComponents.Governors, name: 'governors', meta: {breadcrumbs: false}},
    {path: 'Governorates', component: GovernoratesComponents.Governorates, name: 'Governorates', meta: {breadcrumbs: false}},
    {path: 'Region', component: GovernoratesComponents.Region, name: 'Region', meta: {breadcrumbs: false}},
    {path: 'Division', component: DivisionsComponents.Divisions, name: 'Division', meta: {breadcrumbs: false}},

];
