<template>
    <div class="xwxq">
        <div class="xwxq-content">
            <h1>{{xwdata[num].title}}</h1>
            <p>{{xwdata[num].quote}} {{xwdata[num].Time | convertTime('YYYY年MM月DD日')}}</p>
            <p class="xwzq-cont">{{xwdata[num].content}}</p>
        </div>
    </div>
</template>

<script>
import moment from 'moment'
import Bus from "@/router/Bus"
export default {
    name:'Xwxq',
    data:()=>({
        moment,
        on:true,
        title:"新闻详情",
        num:0,
        xwdata:[
            {url:'../../../static/img/1.png',title:'新闻1',quote:'百度新闻',id:1,content:'新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1新闻内容1',Time:new Date()},
            {url:'../../../static/img/2.png',title:'新闻2',quote:'新浪新闻',id:2,content:'新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2新闻内容2',Time:new Date()},
            {url:'../../../static/img/3.png',title:'新闻3',quote:'腾讯新闻',id:3,content:'新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3新闻内容3',Time:new Date()},
            {url:'../../../static/img/4.png',title:'新闻4',quote:'百度新闻',id:4,content:'新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4新闻内容4',Time:new Date()}
        ],
    }),
    methods:{
        fn(){
            Bus.$emit('gevent',[this.on,this.title,"/xwzx"])
        }
    },
    created(){
        this.num=this.$route.query.id-1
    },
     mounted(){
        window.onload=()=>{
            this.fn()
        }
         this.fn();
    },
    destroyed(){
        Bus.$emit('gevent',[false,"首页"])
    }
}
</script>

<style scoped>
    .xwzq-cont{
        text-align: left;
        text-indent: 2em;
    }
</style>
