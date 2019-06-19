<template>
    <div>
        seek
    </div>
</template>

<script>
import Bus from "@/router/Bus"
export default {
      name:'seek',
     methods:{
        fn(){
            Bus.$emit('gevent2',['查找','seek'])
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
