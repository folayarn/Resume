
<div class="row">
    <div class="col-md-4">
        <address>  <h1>Address</h1>
            <span class="fa fa-map icon"></span>  Zone 1, Folayan Street, Ayekale Area, Ota-efun Road,
         Osogbo, Osun State,Nigeria
<br/>

         <span class="fa fa-phone icon"></span> <a href="tel:07033011638">07033011638</a>
         <br/>

<span class="fa fa-phone icon"></span><a href="tel:08138467941">08138467941 </a>
<br/>

        <a href="mailto:folayanshola@gmail.com"><span class="fa fa-envelope icon"></span>Folayanshola@gmail.com</a>
       <br/> <div class="lo">

        <ul>
            <li> <a href="https://github.com/folayarn"> <img src="/images/github.png" /></a></li>
            <li> <a href="https://stackoverflow.com/users/10776330/shola-michael"> <img src="/images/stack.png" /></a></li>
            <li> <a href="https://www.linkedin.com/in/folayanshola-adesola-a508b5133/"> <img src="/images/linkedin.png" /></a></li>
            <li> <a href="https://web.facebook.com/genesisdesignx"> <img src="/images/facebook.png" /></a></li>
            <li> <a href="https://twitter.com/folayarn"> <img src="/images/twitter.png" /></a></li>
            <li> <a href="https://www.instagram.com/borjack_horseman/"> <img src="/images/instagram.png" /></a></li>
            
            
            
            
            
                            </ul>
        </div>
                    

    </address>
</div>

<div class="col-md-4">


</div>




<div class="col-md-4" id="form">


<form id="post_message">


<div class="form-group">
    <label for="full name">{{ __('Full Name') }}<span style="color:red">*</span></label>


        <input id="name" type="text"
         class="form-control @error('name') is-invalid @enderror" name="name"
         placeholder="name goes here"
         required>
</div>
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}<span style="color:red">*</span></label>
            <input id="email" type="email" placeholder="mailto@example.com" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

    </div>

    <div class="form-group">
        <label for="Message">{{ __('Your Message') }}<span style="color:red">*</span></label>
            <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body"
             placeholder="write your message "
             rows="3" cols="3"
             required></textarea>
    </div>
            <div class="form-group">
                <button class="btn btn-primary send_btn">Send</button>
    </div>
</form>

</div>

</div>



