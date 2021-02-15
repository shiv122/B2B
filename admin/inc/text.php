<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<style type="text/css">
	 .stretch-card>.card {
     width: 100%;
     min-width: 100%
 }

 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 3rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #3da5f;
     border-radius: 0
 }

 .card .card-body {
     padding: 1.25rem 1.75rem
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 .btn-info {
     color: #fff;
     background-color: #3da5f4;
     border-color: #3da5f4
 }

 .btn {
     display: inline-block;
     font-weight: 400;
     text-align: center;
     white-space: nowrap;
     vertical-align: middle;
     user-select: none;
     border: 1px solid transparent;
     padding: 0.875rem 1.5rem;
     font-size: 1rem;
     line-height: 1;
     border-radius: 0.1875rem;
     transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
 }

 .form-control {
     border: 1px solid #f3f3f3;
     font-weight: 400;
     font-size: 0.875rem
 }

 .form-control {
     display: block;
     width: 100%;
     padding: 0.875rem 1.375rem;
     font-size: 1rem;
     line-height: 1;
     color: #495057;
     background-color: #ffffff;
     background-clip: padding-box;
     border: 1px solid #ced4da;
     border-radius: 2px;
     transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
 }

 input,
 .form-control:focus {
     outline: none;
     outline-width: 0;
     outline-color: transparent;
     box-shadow: none;
     outline-style: none
 }
</style>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title">cut/copy clipboard on text input</h4>
                                <p class="card-description">Cut/copy from text input</p> <input type="text" id="clipboardExample1" class="form-control" value="hello">
                                <div class="mt-3"> <button type="button" class="btn btn-info btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardExample1">Copy</button> <button type="button" class="btn btn-success btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardExample1">Cut</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$( document ).ready(function() {

new ClipboardJS('.btn');

});
</script>
