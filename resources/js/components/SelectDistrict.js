const addressData = require('china-area-data/v3/data');

import _ from 'lodash';

Vue.component('select-district',{
    props:{
        initValue:{
            type:Array,
            default:function(){
            return [];
            }
        }
    },
    data:function (){
        return {
            provinces:addressData['86'],
            cities:{},
            districts:{},
            provinceId:'',
            cityId:'',
            districtId:'',
        }
    },
    watch:{
        provinceId(newval){
            if(!newval){
                this.cities={};
                this.cityId='';
                return; 
            }
            this.cities = addressData[newval];
            if(!this.cities[this.cityId]){
                this.cityId= '';
                return ;
            }
        },
        cityId(newval){
            if(!newval){
                this.districts={};
                this.districtId='';
                return;
            }
            this.districts = addressData[newval];
            if(!this.districts[this.districtId]){
                this.districtId='';
            }
        },
        districtId(){
            this.$emit('change',[this.provinces[this.provinceId],this.cities[this.cityId],this.districts[this.districtId]]);
        }
    },
    created(){
        this.setFormValue(this.initValue);
    },
    methods:{
        setFormValue:function(value){
            value = _.filter(value);
            if(value.length===0){
                this.provinceId='';
                return;
            }
            const provinceId = _.findKey(this.provinces,function(o){
                return o ===value[0];
            });
            if(!provinceId){
                this.provinceId='';
                return ;
            } 
            this.provinceId = provinceId;
            // 由于观察器的作用，这个时候城市列表已经变成了对应省的城市列表
            // 从当前城市列表找到与数组第二个元素同名的项的索引
            const cityId = _.findKey(addressData[provinceId],function(o){
                return o === value[1];
            });
            if(!cityId){
                this.cityId='';
                return ;
            }
            this.cityId = cityId;

            const districtId = _.findKey(addressData[cityId],function(o){
                return o === value[2];
            });
            if(!districtId){
                this.districtId='';
                return ;
            }
            this.districtId = districtId;
        }
    }
})