// 轮播图
var oBanner = document.getElementById('banner');
var oImg = document.getElementById('img');
var oZb = document.getElementById('zb');
var oYb = document.getElementById('yb');
var oUl = document.getElementById('ul');
var aLi = oUl.getElementsByTagName('li');
var arr = ['url(imgs/1.jpg)', 'url(imgs/125.jpg)', 'url(imgs/3.jpg)', 'url(imgs/4.jpg)', 'url(imgs/2.jpg)', 'url(imgs/5.jpg)', 'url(imgs/7.jpg)', 'url(imgs/8.jpg)'];
var num = 0;
var j = 0;

function change() {
    aLi[num].style.width = "12px";
    aLi[num].style.height = "12px";
}
change();

for (var i = 0; i < aLi.length; i++) {
    (function (j) {
        aLi[j].onmouseover = function () {
            oBanner.style.backgroundImage = arr[j];
            aLi[j].index = j;
            for (var k = 0; k < aLi.length; k++) {
                aLi[k].style.width = "8px";
                aLi[k].style.height = "8px";
            }
            aLi[j].style.width = "12px";
            aLi[j].style.height = "12px";
            num = this.index;
        }
    })(i)
}


oZb.onclick = function () {
    num--;
    if (num == -1) { num = arr.length - 1; }
    oBanner.style.backgroundImage = arr[num];
    for (var k = 0; k < aLi.length; k++) {
        aLi[k].style.width = "8px";
        aLi[k].style.height = "8px";
    }
    aLi[num].style.width = "12px";
    aLi[num].style.height = "12px";
}

oYb.onclick = function () {
    num++;
    if (num == arr.length) {
        num = 0;
    }
    oBanner.style.backgroundImage = arr[num];
    for (var k = 0; k < aLi.length; k++) {
        aLi[k].style.width = "8px";
        aLi[k].style.height = "8px";
    }
    aLi[num].style.width = "12px";
    aLi[num].style.height = "12px";
}


var dsq = setInterval(function () {
    num++;
    if (num == arr.length) { num = 0 }
    for (var k = 0; k < aLi.length; k++) {
        aLi[k].style.width = "8px";
        aLi[k].style.height = "8px";
    }
    aLi[num].style.width = "12px";
    aLi[num].style.height = "12px";
    oBanner.style.backgroundImage = arr[num];
}, 3000)

oBanner.onmouseover = function () {
    clearInterval(dsq);
}
oBanner.onmouseout = function () {
    dsq = setInterval(function () {
        num++;
        if (num == arr.length) { num = 0 }
        for (var k = 0; k < aLi.length; k++) {
            aLi[k].style.width = "8px";
            aLi[k].style.height = "8px";
        }
        aLi[num].style.width = "12px";
        aLi[num].style.height = "12px";
        oBanner.style.backgroundImage = arr[num];
    }, 2000)
}



// 新歌首发js
var oTop = document.getElementById('top');
var oAa = oTop.getElementsByClassName('aa');
var oC0 = document.getElementsByClassName('c0')[0];
var oC1 = document.getElementsByClassName('c1')[0];
var oC2 = document.getElementsByClassName('c2')[0];
var oC3 = document.getElementsByClassName('c3')[0];

oAa[0].onclick = function () {
    oC1.style.display = "none";
    oC2.style.display = "none";
    oC3.style.display = "none";
    oC0.style.display = "block";
    for (var k = 0; k < oAa.length; k++) {
        oAa[k].style.color = "black";
    }
    oAa[0].style.color = "#169af3";
}
oAa[1].onclick = function () {

    oC2.style.display = "none";
    oC3.style.display = "none";
    oC0.style.display = "none";
    oC1.style.display = "block";
    for (var k = 0; k < oAa.length; k++) {
        oAa[k].style.color = "black";
    }
    oAa[1].style.color = "#169af3";
}
oAa[2].onclick = function () {
    oC3.style.display = "none";
    oC0.style.display = "none";
    oC1.style.display = "none";
    oC2.style.display = "block";
    for (var k = 0; k < oAa.length; k++) {
        oAa[k].style.color = "black";
    }
    oAa[2].style.color = "#169af3";
}
oAa[3].onclick = function () {

    oC2.style.display = "none";
    oC1.style.display = "none";
    oC0.style.display = "none";
    oC3.style.display = "block";
    for (var k = 0; k < oAa.length; k++) {
        oAa[k].style.color = "black";
    }
    oAa[3].style.color = "#169af3";
}


// 音乐歌单
function aa(id1, id2) {
    var oI = document.getElementById(id1);
    var oMuc = document.getElementById(id2);
    oI.onclick = function () {
        if (i == 0) {
            oMuc.pause(); //暂停
            i = 1;
            oI.style.background = "url(imgs/18.png) 0 -303px"
        } else {
            oMuc.play(); //播放
            i = 0;
            oI.style.background = "url(imgs/22.png) 0 -303px"
        }
    }
}
aa('b1', 'muc1');
aa('b2', 'muc2');
aa('b3', 'muc3');
aa('b4', 'muc4');
aa('b5', 'muc5');
aa('b6', 'muc6');
aa('b7', 'muc7');
aa('b8', 'muc8');


//热门歌手
var oYd1 = document.getElementById('yq1');
var oYd3 = document.getElementById('yq2');
var oYd2 = document.getElementById('yq3');
// alert(1);
var oHy = document.getElementById('hy');
var oOm = document.getElementById('om');
var oRh = document.getElementById('rh');
var oGd = document.getElementById('gd');

var oImgg1 = document.getElementById('img1');
var oImgg2 = document.getElementById('img2');
var oImgg3 = document.getElementById('img3');
var oImgg4 = document.getElementById('img4');
var oImgg5 = document.getElementById('img5');

var oSpan1 = document.getElementById('span1');
var oSpan2 = document.getElementById('span2');
var oSpan3 = document.getElementById('span3');
var oSpan4 = document.getElementById('span4');
var oSpan5 = document.getElementById('span5');

var arr1 = ['薛之谦', 'Alan Walker', 'BIGBANG', 'Ludwig van'];
var arr2 = ['周杰伦', 'Michaer jackson', 'EXO', '迪玛希'];
var arr3 = ['林俊杰', 'Taylor Swift', 'IU', 'Hoaprox'];
var arr4 = ['G.E.M.邓紫棋', 'Justin Bieber', 'BLAVKPINK', 'Crazy Frog'];
var arr5 = ['张杰', 'TRoye Sivan', 'iKON', 'Rng'];

var arrUrl1 = ['imgs/23.jpg', 'imgs/70.jpg', 'imgs/75.jpg', 'imgs/80.jpg'];
var arrUrl2 = ['imgs/21.jpg', 'imgs/71.jpg', 'imgs/76.jpg', 'imgs/81.jpg'];
var arrUrl3 = ['imgs/20.jpg', 'imgs/72.jpg', 'imgs/77.jpg', 'imgs/82.jpg'];
var arrUrl4 = ['imgs/24.jpg', 'imgs/73.jpg', 'imgs/78.jpg', 'imgs/83.jpg'];
var arrUrl5 = ['imgs/22.jpg', 'imgs/74.jpg', 'imgs/79.jpg', 'imgs/84.jpg'];

var arrtp1 = ['imgs/85.jpg', 'imgs/86.jpg', 'imgs/87.jpg', 'imgs/88.jpg', 'imgs/94.jpg',];
var arrtp2 = ['imgs/89.jpg', 'imgs/90.jpg', 'imgs/91.jpg', 'imgs/92.jpg', 'imgs/93.jpg',];
var arrtext1 = ['A-lin', '庄心妍', '刀郎', '刘德华', '李荣浩'];
var arrtext2 = ['张学友', '陈奕迅', '易烊千玺', '张宇', '毛不易'];

var arrtp3 = ['imgs/95.jpg', 'imgs/96.jpg', 'imgs/97.jpg', 'imgs/98.jpg', 'imgs/99.jpg',];
var arrtp4 = ['imgs/100.jpg', 'imgs/101.jpg', 'imgs/102.jpg', 'imgs/103.jpg', 'imgs/104.jpg',];
var arrtext3 = ['Avril Lavigne', 'Eminem', 'LINKIN PARK', 'Chris tine', 'Troye Sivan'];
var arrtext4 = ['Baidari', 'Lady Gaga', 'Maroon 5', 'Westlife', 'Adele'];

var arrtp5 = ['imgs/105.jpg', 'imgs/106.jpg', 'imgs/107.jpg', 'imgs/108.jpg', 'imgs/109.jpg',];
var arrtp6 = ['imgs/110.jpg', 'imgs/111.jpg', 'imgs/112.jpg', 'imgs/113.jpg', 'imgs/114.jpg',];
var arrtext5 = ['玄雅', 'iKON', 'EXID', '蔡妍', 'Troble'];
var arrtext6 = ['李贞贤', 'J.Fla', 'MINO', 'SUNMI', '脸红的思春'];

var arrtp7 = ['imgs/115.jpg', 'imgs/116.jpg', 'imgs/117.jpg', 'imgs/118.jpg', 'imgs/119.jpg',];
var arrtp8 = ['imgs/120.jpg', 'imgs/121.jpg', 'imgs/122.jpg', 'imgs/123.jpg', 'imgs/124.jpg',];
var arrtext7 = ['高青', 'HKT', 'Bie', 'Rich Brian', '卓玛'];
var arrtext8 = ['陈安之', 'Lydia', 'RNG', '迪玛希', '啊班鲁'];

function bb() {
    oHy.style.color = "#169af3";
    for (var k = 0; k < 3; k++) {
        oYd1.style.background = "#d5d5d5";
        oYd2.style.background = "#d5d5d5";
        oYd3.style.background = "#d5d5d5";
    }
    oYd1.style.background = "#169af3";
    oYd1.onmouseover = function () {
        oImgg1.src = arrUrl1[0];
        oImgg2.src = arrUrl2[0];
        oImgg3.src = arrUrl3[0];
        oImgg4.src = arrUrl4[0];
        oImgg5.src = arrUrl5[0];
        oSpan1.innerHTML = arr1[0];
        oSpan2.innerHTML = arr2[0];
        oSpan3.innerHTML = arr3[0];
        oSpan4.innerHTML = arr4[0];
        oSpan5.innerHTML = arr5[0];
        for (var k = 0; k < 3; k++) {
            oYd1.style.background = "#d5d5d5";
            oYd2.style.background = "#d5d5d5";
            oYd3.style.background = "#d5d5d5";
        }
        oYd1.style.background = "#169af3";
    }
    oYd2.onmouseover = function () {
        oImgg1.src = arrtp1[0];
        oImgg2.src = arrtp1[1];
        oImgg3.src = arrtp1[2];
        oImgg4.src = arrtp1[3];
        oImgg5.src = arrtp1[4];
        oSpan1.innerHTML = arrtext1[0];
        oSpan2.innerHTML = arrtext1[1];
        oSpan3.innerHTML = arrtext1[2];
        oSpan4.innerHTML = arrtext1[3];
        oSpan5.innerHTML = arrtext1[4];
        for (var k = 0; k < 3; k++) {
            oYd1.style.background = "#d5d5d5";
            oYd2.style.background = "#d5d5d5";
            oYd3.style.background = "#d5d5d5";
        }
        oYd2.style.background = "#169af3";
    }
    oYd3.onmouseover = function () {
        oImgg1.src = arrtp2[0];
        oImgg2.src = arrtp2[1];
        oImgg3.src = arrtp2[2];
        oImgg4.src = arrtp2[3];
        oImgg5.src = arrtp2[4];
        oSpan1.innerHTML = arrtext2[0];
        oSpan2.innerHTML = arrtext2[1];
        oSpan3.innerHTML = arrtext2[2];
        oSpan4.innerHTML = arrtext2[3];
        oSpan5.innerHTML = arrtext2[4];
        for (var k = 0; k < 3; k++) {
            oYd1.style.background = "#d5d5d5";
            oYd2.style.background = "#d5d5d5";
            oYd3.style.background = "#d5d5d5";
        }
        oYd3.style.background = "#169af3";
    }
}
bb();

function tp(e, n) {
    e.onmouseover = function () {
        oImgg1.src = arrUrl1[n];
        oImgg2.src = arrUrl2[n];
        oImgg3.src = arrUrl3[n];
        oImgg4.src = arrUrl4[n];
        oImgg5.src = arrUrl5[n];
        oSpan1.innerHTML = arr1[n];
        oSpan2.innerHTML = arr2[n];
        oSpan3.innerHTML = arr3[n];
        oSpan4.innerHTML = arr4[n];
        oSpan5.innerHTML = arr5[n];
        for (var i = 0; i < 4; i++) {
            oHy.style.color = "black"
            oOm.style.color = "black"
            oRh.style.color = "black"
            oGd.style.color = "black"
        }
        e.style.color = "#169af3"
        //    bb();
        if (n == 0) {
            for (var k = 0; k < 3; k++) {
                oYd1.style.background = "#d5d5d5";
                oYd2.style.background = "#d5d5d5";
                oYd3.style.background = "#d5d5d5";
            }
            oYd1.style.background = "#169af3";
            oYd1.onmouseover = function () {
                oImgg1.src = arrUrl1[0];
                oImgg2.src = arrUrl2[0];
                oImgg3.src = arrUrl3[0];
                oImgg4.src = arrUrl4[0];
                oImgg5.src = arrUrl5[0];
                oSpan1.innerHTML = arr1[0];
                oSpan2.innerHTML = arr2[0];
                oSpan3.innerHTML = arr3[0];
                oSpan4.innerHTML = arr4[0];
                oSpan5.innerHTML = arr5[0];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd1.style.background = "#169af3";
            }
            oYd2.onmouseover = function () {
                oImgg1.src = arrtp1[0];
                oImgg2.src = arrtp1[1];
                oImgg3.src = arrtp1[2];
                oImgg4.src = arrtp1[3];
                oImgg5.src = arrtp1[4];
                oSpan1.innerHTML = arrtext1[0];
                oSpan2.innerHTML = arrtext1[1];
                oSpan3.innerHTML = arrtext1[2];
                oSpan4.innerHTML = arrtext1[3];
                oSpan5.innerHTML = arrtext1[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd2.style.background = "#169af3";
            }
            oYd3.onmouseover = function () {
                oImgg1.src = arrtp2[0];
                oImgg2.src = arrtp2[1];
                oImgg3.src = arrtp2[2];
                oImgg4.src = arrtp2[3];
                oImgg5.src = arrtp2[4];
                oSpan1.innerHTML = arrtext2[0];
                oSpan2.innerHTML = arrtext2[1];
                oSpan3.innerHTML = arrtext2[2];
                oSpan4.innerHTML = arrtext2[3];
                oSpan5.innerHTML = arrtext2[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd3.style.background = "#169af3";
            }
        }
        else if (n == 1) {
            for (var k = 0; k < 3; k++) {
                oYd1.style.background = "#d5d5d5";
                oYd2.style.background = "#d5d5d5";
                oYd3.style.background = "#d5d5d5";
            }
            oYd1.style.background = "#169af3";
            oYd1.onmouseover = function () {
                oImgg1.src = arrUrl1[1];
                oImgg2.src = arrUrl2[1];
                oImgg3.src = arrUrl3[1];
                oImgg4.src = arrUrl4[1];
                oImgg5.src = arrUrl5[1];
                oSpan1.innerHTML = arr1[1];
                oSpan2.innerHTML = arr2[1];
                oSpan3.innerHTML = arr3[1];
                oSpan4.innerHTML = arr4[1];
                oSpan5.innerHTML = arr5[1];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd1.style.background = "#169af3";
            }
            oYd2.onmouseover = function () {
                oImgg1.src = arrtp3[0];
                oImgg2.src = arrtp3[1];
                oImgg3.src = arrtp3[2];
                oImgg4.src = arrtp3[3];
                oImgg5.src = arrtp3[4];
                oSpan1.innerHTML = arrtext3[0];
                oSpan2.innerHTML = arrtext3[1];
                oSpan3.innerHTML = arrtext3[2];
                oSpan4.innerHTML = arrtext3[3];
                oSpan5.innerHTML = arrtext3[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd2.style.background = "#169af3";
            }
            oYd3.onmouseover = function () {
                oImgg1.src = arrtp4[0];
                oImgg2.src = arrtp4[1];
                oImgg3.src = arrtp4[2];
                oImgg4.src = arrtp4[3];
                oImgg5.src = arrtp4[4];
                oSpan1.innerHTML = arrtext4[0];
                oSpan2.innerHTML = arrtext4[1];
                oSpan3.innerHTML = arrtext4[2];
                oSpan4.innerHTML = arrtext4[3];
                oSpan5.innerHTML = arrtext4[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd3.style.background = "#169af3";
            }
        }
        else if (n == 2) {
            for (var k = 0; k < 3; k++) {
                oYd1.style.background = "#d5d5d5";
                oYd2.style.background = "#d5d5d5";
                oYd3.style.background = "#d5d5d5";
            }
            oYd1.style.background = "#169af3";
            oYd1.onmouseover = function () {
                oImgg1.src = arrUrl1[2];
                oImgg2.src = arrUrl2[2];
                oImgg3.src = arrUrl3[2];
                oImgg4.src = arrUrl4[2];
                oImgg5.src = arrUrl5[2];
                oSpan1.innerHTML = arr1[2];
                oSpan2.innerHTML = arr2[2];
                oSpan3.innerHTML = arr3[2];
                oSpan4.innerHTML = arr4[2];
                oSpan5.innerHTML = arr5[2];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd1.style.background = "#169af3";
            }
            oYd2.onmouseover = function () {
                oImgg1.src = arrtp5[0];
                oImgg2.src = arrtp5[1];
                oImgg3.src = arrtp5[2];
                oImgg4.src = arrtp5[3];
                oImgg5.src = arrtp5[4];
                oSpan1.innerHTML = arrtext5[0];
                oSpan2.innerHTML = arrtext5[1];
                oSpan3.innerHTML = arrtext5[2];
                oSpan4.innerHTML = arrtext5[3];
                oSpan5.innerHTML = arrtext5[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd2.style.background = "#169af3";
            }
            oYd3.onmouseover = function () {
                oImgg1.src = arrtp6[0];
                oImgg2.src = arrtp6[1];
                oImgg3.src = arrtp6[2];
                oImgg4.src = arrtp6[3];
                oImgg5.src = arrtp6[4];
                oSpan1.innerHTML = arrtext6[0];
                oSpan2.innerHTML = arrtext6[1];
                oSpan3.innerHTML = arrtext6[2];
                oSpan4.innerHTML = arrtext6[3];
                oSpan5.innerHTML = arrtext6[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd3.style.background = "#169af3";
            }
        }
        else if (n == 3) {
            for (var k = 0; k < 3; k++) {
                oYd1.style.background = "#d5d5d5";
                oYd2.style.background = "#d5d5d5";
                oYd3.style.background = "#d5d5d5";
            }
            oYd1.style.background = "#169af3";
            oYd1.onmouseover = function () {
                oImgg1.src = arrUrl1[3];
                oImgg2.src = arrUrl2[3];
                oImgg3.src = arrUrl3[3];
                oImgg4.src = arrUrl4[3];
                oImgg5.src = arrUrl5[3];
                oSpan1.innerHTML = arr1[3];
                oSpan2.innerHTML = arr2[3];
                oSpan3.innerHTML = arr3[3];
                oSpan4.innerHTML = arr4[3];
                oSpan5.innerHTML = arr5[3];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd1.style.background = "#169af3";
            }
            oYd2.onmouseover = function () {
                oImgg1.src = arrtp7[0];
                oImgg2.src = arrtp7[1];
                oImgg3.src = arrtp7[2];
                oImgg4.src = arrtp7[3];
                oImgg5.src = arrtp7[4];
                oSpan1.innerHTML = arrtext7[0];
                oSpan2.innerHTML = arrtext7[1];
                oSpan3.innerHTML = arrtext7[2];
                oSpan4.innerHTML = arrtext7[3];
                oSpan5.innerHTML = arrtext7[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd2.style.background = "#169af3";
            }
            oYd3.onmouseover = function () {
                oImgg1.src = arrtp8[0];
                oImgg2.src = arrtp8[1];
                oImgg3.src = arrtp8[2];
                oImgg4.src = arrtp8[3];
                oImgg5.src = arrtp8[4];
                oSpan1.innerHTML = arrtext8[0];
                oSpan2.innerHTML = arrtext8[1];
                oSpan3.innerHTML = arrtext8[2];
                oSpan4.innerHTML = arrtext8[3];
                oSpan5.innerHTML = arrtext8[4];
                for (var k = 0; k < 3; k++) {
                    oYd1.style.background = "#d5d5d5";
                    oYd2.style.background = "#d5d5d5";
                    oYd3.style.background = "#d5d5d5";
                }
                oYd3.style.background = "#169af3";
            }
        }

    }
}
tp(oHy, 0);
tp(oOm, 1);
tp(oRh, 2);
tp(oGd, 3);


var oTop=0;
var oGddw = document.getElementById('gddw');
window.onscroll = function () {
     oTop= document.body.scrollTop || document.documentElement.scrollTop;
    if (oTop >= 500) {
        oGddw.style.display = "block";
    }
    else {
        oGddw.style.display = "none";
    }
}

oGddw.onclick=function()
{
    sj=setInterval(function(){
        document.body.scrollTop=document.documentElement.scrollTop=oTop-100;
        if(oTop<=0)
        {
            clearInterval(sj);
        }
    },30)
}

