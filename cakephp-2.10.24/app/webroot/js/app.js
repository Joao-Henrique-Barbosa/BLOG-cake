function buscar_post(){
    $.ajax({
        method: 'post',
        url: 'http://localhost/cake_2_0/cakephp-2.10.24/posts',
        dataType: 'text', 
        success: function(data) {
            //alert(data);
            $( "#principal" ).html(data);
        },
        error: function(e){
                console.log(e.message);
                //alert('error');
        }
    });
}
function editar_post(id){
    $.confirm({
        title: 'Title',
        content: 'url:http://localhost/cake_2_0/cakephp-2.10.24/posts/edit/'+id,
        buttons:{
            ok: function(){
                var form = $('#PostEditForm');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/cake_2_0/cakephp-2.10.24/posts/edit/"+id,
                    data: form.serialize(),
                    cache: true,
                    beforeSend: function(){	
                        
                    }, 
                    success: function (data) {
                        buscar_post();
                    },
                    error: function (data){
                     alert
                    },
                    async: true
                });
            },
        },
        columnClass: 'medium',
    });
}
function add_post(){
    $.confirm({
        title: 'Title',
        content: 'url:http://localhost/cake_2_0/cakephp-2.10.24/posts/add',
        buttons:{
            ok: function(){
                var form = $('#PostAddForm');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/cake_2_0/cakephp-2.10.24/posts/add",
                    data: form.serialize(),
                    cache: true,
                    beforeSend: function(){	
                        
                    }, 
                    success: function (data) {
                        buscar_post();
                    },
                    error: function (data){
                                    
                    },
                    async: true
                });
            },
        },
        columnClass: 'medium',
    });
}
function view_post(id){
    $.confirm({
        title: 'Title',
        content: 'url:http://localhost/cake_2_0/cakephp-2.10.24/posts/view/'+id,
        buttons:{
            ok: function(){
                $.ajax({
                    url: 'http://localhost/cake_2_0/cakephp-2.10.24/posts',
                    type: "POST",
                    success: function(){ 
                        buscar_post();
                    },
                });
            },
        },
    });
}
function deletar(id){
    $.confirm({
        title: 'Title',
        content: 'Realmente deseja deletar o post '+id+'?',
        buttons:{
            ok: function(){
                var form = $('#PostEditForm');
                $.ajax({
                    url: "http://localhost/cake_2_0/cakephp-2.10.24/posts/delete/"+id,
                    type: "POST",
                    success: function (data) {
                        buscar_post();
                    },
                    async: true
                });
            },
            cancel: function(){
                    buscar_post()
            },
        },
        columnClass: 'medium',
    });
}
function buscar_comments(){
    $.ajax({
        method: 'post',
        url: 'http://localhost/cake_2_0/cakephp-2.10.24/comments',
        dataType: 'text', 
        success: function(data) {
            //alert(data);
            $( "#principal" ).html(data);
        },
        error: function(e){
                console.log(e.message);
                //alert('error');
        },
    });
}
function add_comment(post_id){
    $.confirm({
        title: 'Title',
        content:   'url:http://localhost/cake_2_0/cakephp-2.10.24/comments/add/'+post_id,
        buttons:{
            ok: function(){
                var form = $('#CommentAddForm');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/cake_2_0/cakephp-2.10.24/",
                    data: form.serialize(),
                    cache: true,
                    beforeSend: function(){	
                        
                    }, 
                    success: function (data) {
                        buscar_comments();
                    },
                    error: function (data){
                                    
                    },
                    async: true
                });
            },
            cancel: function(){
                buscar_post();
            },
        },
        columnClass: 'medium',
    });
}
function show_comment(post_id){
    $.confirm({
        title: 'Title',
        content: 'url:http://localhost/cake_2_0/cakephp-2.10.24/comments/show/'+post_id,
        buttons:{
            ok: function(){
                $.ajax({
                    url: 'http://localhost/cake_2_0/cakephp-2.10.24/',
                    type: "POST",
                    success: function(){ 
                        buscar_post();
                    },
                });
            },
        },
    });
}