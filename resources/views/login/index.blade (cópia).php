@extends('layouts.app')

@section('content')
<!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12 text" style="text-align:center">
                            <h1><strong>LOGO</strong>
                            <div class="description">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>

		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>

                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>SIGLADOSISTEMA</h3>
	                            		<p>Nome completo do Sistema por extenso</p>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf sadfasd fasdf
			                    </div>
                        	</div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Made by Anli Zaimi at <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>
        					having a lot of fun. <i class="fa fa-smile-o"></i></p>
        			</div>

        		</div>
        	</div>
        </footer>
        <div class="container">
         <div class="row">
           <div class="col-md-4 col-md-offset-4">
             <div class="login-panel panel panel-default">
               <div class="panel-heading">
                 <h3 class="panel-title">Sistema Ascap - Administração</h3>
               </div>
               <div class="panel-body">
                 <form action="{{ route('login') }}" method="post">
                   {{csrf_field()}}
                   <fieldset>
                     <div class="form-group">
                       <input type="email" class="form-control validate" placeholder="E-mail" name="email" id="email"  autofocus/>
                     </div>
                     <div class="form-group">
                       <input type="password" class="form-control validate" placeholder="Senha" name="password" id="password" />
                     </div>
        {{--                 <div class="checkbox">
                         <label>
                           <input name="remember" type="checkbox" value="Remember Me">Remember Me
                         </label>
                       </div> --}}
                       <!-- Change this to a button or input when using this as a form -->
                       <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                     </fieldset>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
  @endsection

  @push('styles')

  <link href="{{ asset('http://azmind.com/demo/bootstrap-login-register-forms/form-1/assets/css/form-elements.css') }}" rel="stylesheet">
  <link href="{{ asset('http://azmind.com/demo/bootstrap-login-register-forms/form-1/assets/css/style.csss') }}" rel="stylesheet">
  @endpush

  @push('scripts')
  <script src="{{ asset('http://azmind.com/demo/bootstrap-login-register-forms/form-1/assets/js/jquery.backstretch.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('http://azmind.com/demo/bootstrap-login-register-forms/form-1/assets/js/scripts.js') }}" type="text/javascript"></script>
  @endpush
