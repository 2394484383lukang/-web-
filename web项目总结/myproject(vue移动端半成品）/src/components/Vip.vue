<template>
    <div>
        fdsafd
    </div>
</template>

<script>
import Bus from "@/router/Bus"
export default {
    name:'vip',
     methods:{
        fn(){
            Bus.$emit('gevent2',['会员','vip'])
        }
    },
    mounted(){
        window.onload=()=>{
            this.fn()
        }
         this.fn()
    },
}
</script>

<style>

</style>
