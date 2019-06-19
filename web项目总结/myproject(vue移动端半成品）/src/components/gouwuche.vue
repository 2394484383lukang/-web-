<template>
    <div>gouwuche</div>
</template>

<script>
import Bus from "@/router/Bus"
export default {
        name:'gouwuche',
     methods:{
        fn(){
            Bus.$emit('gevent2',['购物车','gouwuche'])
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
