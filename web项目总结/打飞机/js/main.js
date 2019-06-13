window.onload = function () {
    //飞机

    //键盘按下
    document.onkeydown = function (ev) {
        if (off == false) {
            return;
        }
        var ev = ev || window.event;
        var v = 2;
        //左移
        if (ev.keyCode == 37) {
            // amove($("player"),"R");
            amove($("player"), "left", v);
        }
        //右移
        else if (ev.keyCode == 39) {
            // amove($("player"),"L");
            amove($("player"), "right", v);
        }
        //上移
        else if (ev.keyCode == 38) {
            // amove($("player"),"D");
            amove($("player"), "up", v);
        }
        //下移
        else if (ev.keyCode == 40) {
            // amove($("player"),"U");
            amove($("player"), "down", v);
        }
    };
    //键盘抬起
    document.onkeyup = function (ev) {
        var ev = ev || window.event;
        if (ev.keyCode == 37) {
            amove($("player"), "L");
        } else if (ev.keyCode == 39) {
            amove($("player"), "R");
        } else if (ev.keyCode == 38) {
            amove($("player"), "U");
        } else if (ev.keyCode == 40) {
            amove($("player"), "D");
        }
    }


    //移动函数
    var timeL = null;
    var timeR = null;
    var timeU = null;
    var timeD = null;

    function amove(ji, fx, v) {


        if (fx == "left") {
            clearInterval(timeL);
            timeL = setInterval(
                function () {
                    ji.style.left = parseInt(getComputedStyle(ji).left) - v + "px";
                    if (parseInt(getComputedStyle(ji).left) <= 0) {
                        ji.style.left = "0";
                        clearInterval(timeL);
                    }
                }, 1);
        } else if (fx == "right") {
            clearInterval(timeR);
            timeR = setInterval(
                function () {
                    ji.style.left = parseInt(getComputedStyle(ji).left) + v + "px";
                    if (parseInt(getComputedStyle(ji).left) >= 450 - 118) {
                        ji.style.left = 450 - 118 + "px";
                        clearInterval(timeR);
                    }
                }, 1);
        } else if (fx == "up") {
            clearInterval(timeU);
            timeU = setInterval(
                function () {
                    ji.style.bottom = parseInt(getComputedStyle(ji).bottom) + v + "px";
                    if (parseInt(getComputedStyle(ji).bottom) >= 666 - 96) {
                        ji.style.bottom = 666 - 96 + "px";
                        clearInterval(timeU);
                    }
                }, 1);
        } else if (fx == "down") {
            clearInterval(timeD);
            timeD = setInterval(
                function () {
                    ji.style.bottom = parseInt(getComputedStyle(ji).bottom) - v + "px";
                    if (parseInt(getComputedStyle(ji).bottom) <= 0) {
                        ji.style.bottom = "0";
                        clearInterval(timeD);
                    }
                }, 1);
        } else if (fx == "L") {
            clearInterval(timeL);
        } else if (fx == "R") {
            clearInterval(timeR);
        } else if (fx == "U") {
            clearInterval(timeU);
        } else if (fx == "D") {
            clearInterval(timeD);
        }
    }
    //飞机、子弹移动
    var time15=null;//技能消失
    var dat=0;
    var dat2=1;
    function movezd(zd, vt) {
        dd();

        function dd() {
            if (off == false) {
                zd.style.bottom = parseInt(getComputedStyle(zd).bottom) + "px";
            } else {
                zd.style.bottom = parseInt(getComputedStyle(zd).bottom) + vt + "px";
            }
            if (vt > 0) {
                if (parseInt(getComputedStyle(zd).bottom) <= 666) {
                    requestAnimationFrame(dd);
                } else {
                    zd.parentNode.removeChild(zd);
                }
            } else {
                if (parseInt(getComputedStyle(zd).bottom) >= -parseInt(getComputedStyle(zd).height)) {
                     //死亡游戏结束
                    if(pengzhuang(zd,$("player"))&&(zd.className=="diji"||zd.className=="diji2"||zd.className=="diji3")){jieshu()};
                   //奖励一
                    if(pengzhuang(zd,$("player"))&&zd.className=="jiangli"){
                        clearInterval(time6);
                        clearInterval(time11);
                        clearInterval(time12);
                        zd.style.display="none";
                        moedel2();
                        time15=setInterval(function(){
                            if(dat==5){
                            clearInterval(time6);
                            clearInterval(time11);
                            clearInterval(time12);
                            moedel();
                            dat=0;
                        clearInterval(time15);
                        }else{
                            dat+=dat2;
                        }
                        },1000);
                    }
                    //奖励二
                    if(pengzhuang(zd,$("player"))&&zd.className=="jiangli2"){
                        clearInterval(time6);
                        clearInterval(time11);
                        clearInterval(time12);
                        zd.style.display="none";
                        moedel3();
                       time15=setInterval(function(){
                            if(dat==5){
                            clearInterval(time6);
                            clearInterval(time11);
                            clearInterval(time12);
                            moedel();
                            dat=0;
                        clearInterval(time15);
                        }else{
                            dat+=dat2;
                        }
                        },1000);
                    }
                    zidzhuang(zd,document.getElementsByTagName("p"))//撞击子弹
                    requestAnimationFrame(dd);
                } else {
                    zd.parentNode.removeChild(zd);
                }
            }
        }
    }
    var time6 = null;
    //发射子弹
//中间子弹
    function zid(ji,v,classname) {
        clearInterval(time6);
        time6 = setInterval(function () {
            var a = document.createElement("p");
            a.className =classname;
            $("box").appendChild(a);

            a.style.left = parseInt(getComputedStyle(ji).left) + v + "px";
            a.style.bottom = parseInt(getComputedStyle(ji).bottom) + v + "px";
            movezd(a, 10);

        }, 200)
    }
    //左边子弹
    var time11=null;
    function zid2(ji,v,classname) {
        clearInterval(time11);
        time11 = setInterval(function () {
            var a = document.createElement("p");
            a.className = classname;
            $("box").appendChild(a);

            a.style.left = parseInt(getComputedStyle(ji).left)+v + "px";
            a.style.bottom = parseInt(getComputedStyle(ji).bottom) + "px";
            movezd(a, 10);
            

        }, 200)
    }
    //右边子弹
    var time12=null;
    function zid3(ji,v,classname) {
        clearInterval(time12);
        time12 = setInterval(function () {
            var a = document.createElement("p");
            a.className = classname;
            $("box").appendChild(a);

            a.style.left = parseInt(getComputedStyle(ji).left)+v+ "px";
            a.style.bottom = parseInt(getComputedStyle(ji).bottom) + "px";
            movezd(a, 10);

        }, 200)
    }
    //模式一
   function moedel(){
        mod=0;
        zid($("player"),40,"zidan2");
        $("player").className="player2";
   }
   //模式二
   function moedel2(){
    mod=1;
        zid2($("player"),0,"zidan");
        zid3($("player"),72,"zidan");
        $("player").className="player";
   }
   //模式三
   function moedel3(){
    mod=2;
        zid($("player"),36,"zidan3");
        zid2($("player"),0,"zidan3");
        zid3($("player"),72,"zidan3");
        $("player").className="player3";
   }

    //开始游戏、继续游戏
    var off = false;
    var mod=0;//判断飞机模式
    $("kaishi").onclick = function () {
        if($("kais").className=="renew" ||$("kais").className=="omoreg"){
           location.reload();
        }//重新开始
        if($("kais").className=="kais"){ //开始游戏
            setTimeout(function(){
                djsd();//敌机产生速度
                diji();
                jl();
                moedel();
            },1000)
            $("player").style.left="160px"}
        if($("kais").className=="zhanting"){//继续游戏
            dat2=1;
            dat4=1;
              
                djsd();//敌机产生速度
                diji();
               if(mod==0){
                   moedel();
               }else if(mod==1){
                moedel2();
               }else if(mod==2){
                moedel3();
               }
        }
        off = true;
       $("fenshu").style.display="block";
        $("player").style.display = "block";
        $("kaishi").style.display = "none";
        $("kaisImg").style.display = "none";

    }
    // 暂停游戏
    $("zhanting").onclick = function () {
        off = false;
        clearInterval(timeL);
        clearInterval(timeR);
        clearInterval(timeU);
        clearInterval(timeD);
        clearInterval(time9);
        clearInterval(time8);
        clearInterval(time6);
        clearInterval(time11);
        clearInterval(time12);
        dat2=0;
       dat4=0;
        $("kaishi").style.display = "block";
        $("kais").className="zhanting";
        $("kaisImg").style.display = "block";

    }
    //重新开始
    $("renew").onclick=function () {
        off = false;
       
        clearInterval(time9);
        clearInterval(time8);
        clearInterval(time6);
        clearInterval(time11);
        clearInterval(time12);
        clearInterval(time14);
        
        $("kaishi").style.display = "block";
        $("kais").className="renew";
        $("kaisImg").style.display = "block";

    }
    //游戏结束
    function jieshu() {
        off = false;
        clearInterval(time14);
        clearInterval(time12);
        clearInterval(time11);
        clearInterval(time9);
        clearInterval(time8);
        clearInterval(time6);
        clearInterval(timeL);
        clearInterval(timeR);
        clearInterval(timeU);
        clearInterval(timeD);
        $("fenshu").style.zIndex=10;
        $("fenshu").style.left="140px"
        $("kaishi").style.display = "block";
        $("kais").className="omoreg";
        $("kaisImg").style.display = "block";

    }
    
    //背景移动
    var bgv = 0;

    function bgmove() {
        if (off == true) {
            bgv += 2;
            $("box").style.backgroundPositionY = bgv + "px";
        } else {
            $("box").style.backgroundPositionY = bgv + "px";
        }
        requestAnimationFrame(bgmove);
    }
    bgmove();
    //随机产生敌机
    var time8 = null;
    var djv=500//敌机产生时间间隔
    function diji(s) {
        var arrdi = ["diji", "diji2", "diji3","jiangli","jiangli2"]
        clearInterval(time8);
        time8 = setInterval(function () {
            var a2 = document.createElement("span");
            var t=null;
          if(s==undefined){
            t = parseInt(Math.random() * 3);
        }else if(s==3){t=s;s=undefined;}
        else if(s=4){t=s;s=undefined;}
        
            a2.className = arrdi[t];
            a2.index=0;
            a2.style.bottom=666+a2.offsetHeight+'px';
            $("box").appendChild(a2);
            
            a2.style.left = parseInt(Math.random() * (450 - parseInt(getComputedStyle(a2).width))) + "px";
            movezd(a2, -5);
        }, djv)
    }
    //产生奖励
    var dat3=10;//产生奖励倒计时
    var dat4=1;
    var time14=null;
    function jl(){
        clearInterval(time14);
    time14=setInterval(function(){
        if(dat3==0){
        clearInterval(time8);
     var t = parseInt(Math.random() * 3+3);
        diji(t);
        dat3=10;
    }else{dat3-=dat4;}
    },1000);
}
    //随时间改变敌机速度
    var time9=null;
   
    function djsd(){
    clearInterval(time9);
     time9=setInterval(function(){
        if(djv<200){clearInterval(time9);return;}
         djv-=50;
        
         diji();
    },20000)
}
    //碰撞
    function pengzhuang(wut1, wut2) {
        var x=0;y=0;
        if(wut2==$("player")){x=40;y=25};
       if(parseInt(getComputedStyle(wut1).bottom)<0){return false;}
       else if(wut1.offsetLeft<=wut2.offsetLeft+wut2.offsetWidth-y&&wut1.offsetLeft+wut1.offsetWidth>=wut2.offsetLeft+y&&
        wut1.offsetTop<=wut2.offsetTop+wut2.offsetHeight-25&&
        wut1.offsetTop+wut1.offsetHeight>=wut2.offsetTop+x){
           return true;
        }
        else{return false;}
    }
    /* //子弹撞击
    function zidzhuang(wu1,wu2){
        for(var i=0;i<wu2.length;i++){
           if(pengzhuang(wu1, wu2[i])){
            wu1.style.display="none";
            wu2[i].style.display="none";
           }else{continue;}
        }
    } */
//敌机被撞
var fenshu=0;
var oEm=document.getElementsByTagName("em")[0];
var arrpand=[1,2,3]
    function zidzhuang(wu1,wu2){
        if(wu1.className=="diji3"){
         
        for(var i=0;i<wu2.length;i++){
           if(pengzhuang(wu1, wu2[i])){
            wu1.index+=1;//记录被撞次数
            wu2[i].style.display="none";
           }else{continue;}
           if( wu1.index==3){
            fenshu+=3;
            oEm.innerText=fenshu;
            wu1.style.display="none";
        }
        } 
    }
        if(wu1.className=="diji"){
             
        for(var i=0;i<wu2.length;i++){
           if(pengzhuang(wu1, wu2[i])){
            wu1.index+=1;//记录被撞次数
            wu2[i].style.display="none";
           }else{continue;}
           if(wu1.index==2){
            fenshu+=2;
            oEm.innerText=fenshu;
            wu1.style.display="none";
        }
        } 
    }
        if(wu1.className=="diji2"){
             
        for(var i=0;i<wu2.length;i++){
           if(pengzhuang(wu1, wu2[i])){
            wu1.index+=1;//记录被撞次数
            wu2[i].style.display="none";
           }
           else{continue;}
           if(wu1.index==1){
            fenshu+=1;
            oEm.innerText=fenshu;
            wu1.style.display="none";
        }
        } 
    }
    }

};