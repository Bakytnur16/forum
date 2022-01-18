<?php
header("Content-Type: text/html; charset=utf-8");

$conn = mysqli_connect("localhost","root","","user");
$sql = "select * from article";

function getallfruit($sql){undefined

    $rows = fetchAll($sql);
    
    return $rows;
    
    }
    
    $rows=getallfruit($sql);
    
    $n = getResultNum($sql);
    
    ?>

?>
一共得到<?php echo $n ?>条数据

$(function () {undefined

$('#container').highcharts({ //图表展示容器，与div的id保持一致

chart: {undefined

type: 'column' //指定图表的类型，默认是折线图(line)

},

title: {undefined

text: '水果表' //指定图表标题

},

xAxis: {undefined

categories: ['价格','销量','数量' ]//指定x轴分组

},

yAxis: {undefined

title: {undefined

text: 'something' //指定y轴的标题

}

},

series: [

{ //指定数据列

name: 'Point',//声明在当前函数中的数组对象

data: [1,2,3],

//数据

},

{ //指定数据列

name: 'Point1',//声明在当前函数中的数组对象

data: [1,3,5],

//数据

},

{ //指定数据列

name: 'Point2',//声明在当前函数中的数组对象

data: [2,4,6],

//数据

}

]

});

});