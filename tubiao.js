window.addEventListener('load',function () {
        let main =document.querySelectorAll('.main');
 let bar =echarts.init(main[0])
// var myChart = echarts.init(document.getElementById('main'));
// let main= document
// 指定图表的配置项和数据
let option = {
    title: {
        text: 'ECharts 入门示例'
    },
    tooltip: {},
    legend: {
        data:['销量']
    },
    xAxis: {
        data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
    },
    yAxis: {},
    series: [{
        name: '销量',
        type: 'bar',
        data: [5, 20, 36, 10, 10, 20]
    }]
};

// 使用刚指定的配置项和数据显示图表。
bar.setOption(option);
// let main1=document.querySelectorAll(',main1')
    let zhe =echarts.init(main[1])
    option = {
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            data: [820, 932, 901, 934, 1290, 1330, 1320],
            type: 'line'
        }]
    };
    zhe.setOption(option)


    let wuifnanwonan =echarts.init(main[2])
    option = {
        title : {
            text: 'WUIF1905男女比例',
            subtext: '纯属虚构',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: ['帅哥','丑女']
        },
        series : [
            {
                name: 'WUIF1905男女比例',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:35, name:'男'},
                    {value:21, name:'女'}
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };
wuifnanwonan.setOption(option)
})