<script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>  
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css" rel="stylesheet" type="text/css">

<!--<Form  action ={{'url'('upload')}}

class="dropzone" id="addImages" enctype="multipart/form-data"> 


                       {{csrf_field()}}

                       </Form>-->

{{Form::open(array('url'=>'upload/'.$image->id,'files'=>true,'class'=>'dropzone','id'=>'addImages'))}}                       
    


{{Form::close()}}

<a href="gettopics">See Yours</a>

 
                  

   

