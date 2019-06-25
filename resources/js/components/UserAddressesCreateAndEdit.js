Vue.component('user-addresses-create-and-edit',{
    data:function(){
        return{
            province:'',
            city:'',
            district:'',
        }
    },
    methods:{
        onDistrictChanged:function(val){
            if(val.length ===3){
                this.province = val[0];
                this.city = val[1];
                this.district = val[2];
            }
        }
    }
})