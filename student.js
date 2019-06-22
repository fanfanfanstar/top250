$(function () {
    //读取
    let  table = $('tbody');
    let progresBar=$('.progress-bar');
    $(document).ajaxStart(function () {
        console.log('start');
        progresBar.css({width:'30%',display:'block'})
    });
    $(document).ajaxSuccess(function () {
        console.log('success');
        progresBar.css({width:'100%'})
    });
    progresBar.on('webkitTransitionEnd',function () {
        $(this).css({display: 'none',width:0})
    });

    // $(document).ajaxS()
    $.ajax({
        url:'./php/query.php',
        type:'GET',
        async:true,
        // data:"age==18",
        dataType:'json',
        success:function (res) {
            let {code,data}=res;
            if (code==1){
              render(data)
            } else{

            }
        }
    })
//添加
    $('[type=submit]').on('click',function (e) {
        e.preventDefault()
        let qs =$('form').serialize();
        $.ajax({
            url:'./insert.php',
            type:'post',
            data:qs,
            dataType:'json',
            success:function (res) {
                console.log(res);
                // window.location.reload()
                if (res.code){
                    let obj=arrayToJson(data);
                    obj.id

                        =res.id

                    ;
                    render([obj]);
                }else{

                }

                }
        })
        // window.location.reload()
    })
    function arrayToJson(data) {
        let obj={};
        data.forEach(ele=>{
            let{name,value}=ele;
            obj[name]=value
        })
        return obj;
    }


    //render
    function render(data) {
        let html='';
        data.forEach(ele=>{
            html+=`
            <tr id="${ele.id}">
            <td><input type="text" value="${ele.names}" data-type="names"></td>
            <td><input type="text" value="${ele.sex}" data-type="sex"></td>
            <td><input type="text" value="${ele.age}" data-type="age"></td>
            <td><input type="text" value="${ele.major}" data-type="major"></td>
          <td><button type="button" class="btn btn-primary btn-xs">删除</button></td>
            
            
</tr>
            `
        })
        table.html((index,value)=>value+html)
    }
    // function delete(data) {

    // }
    // console.log('22222');
    let button=$('button')
    console.log(button);
    table.on('click','button',function () {
        let tr= $(this).closest('tr');
        // console.log(1);
        // console.log(tr);
        let id=tr.attr('id');
        console.log(id);
        $.ajax({
            url:'./php/delete.php',
            type:'post',
            data:{id},
            async:true,
            // data:"age==18",
            dataType:'json',
            success:function (res) {
                let {code,data}=res;
                if (code==1){
                    tr.detach();
                } else{

                }
            }
        })
    })
 table.on('blur','input',function () {
     // let tr = $(this).closest('tr')
     let id = $(this).closest('tr').attr('id');
     let val =$(this).val();
     let type = $(this).data('type');

     $.ajax({
         url:'./updata.php',
         data: {
             type,val,id
         },
         dataType:'json',
         success:function (res) {
             let {code,msg}=res;

         }
     })
 })
    // function delete(data()) {

    // }
})