<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
  <div class="modal-dialog testimonial-modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style = 'background:#444; border-bottom:none;'>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style = 'color:#fff;'><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contactModalLabel">Tell us a little about your project...</h4>
      </div>
	  {!! Form::open(array('action' => 'PagesController@sendemail')) !!}
      <div class="modal-body" style = 'background:#333; padding: 1px;'>
		  {!! Form::text('name', $value = null, array('placeholder' => 'Name', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
		  {!! Form::email('email', $value = null, array('placeholder' => 'Email', 'class' => 'form-control contact-us-form','required' => 'required')) !!}
		  {!! Form::text('phone', $value = null, array('placeholder' => 'Phone Number', 'class' => 'form-control contact-us-form', 'style' => "margin-bottom:15px;", 'required' => 'required')) !!}
		  <div class = 'contact-us-label'>Project Type</div>
		  {!! Form::select('job_type', array('Kitchen' => 'Kitchen', 'Bathroom' => 'Bathroom', 'Basement' => 'Basement', 'Addition' => 'Addition', 'Commercial' => 'Commercial', 'Exterior' => 'Exterior', 'Other' => 'Other'), null, array('class' => 'form-control contact-us-select')) !!}
		  {!! Form::textarea('contact_message', $value = null, array('placeholder' => 'Message', 'class' => 'form-control contact-us-form contact-us-textarea', 'required' => 'required', 'style' => "max-height:75px;")) !!}
		  {!! Form::text('best_time', $value = null, array('placeholder' => 'Best Time to Reach You', 'class' => 'form-control contact-us-form', 'required' => 'required')) !!}
		  <div class = "captcha_container">{!! captcha_img('flat'); !!}{!! Form::text('captcha', $value = null, array('placeholder' => 'Enter characters you see', 'class' => 'form-control', 'required' => 'required')) !!}</div>
      </div>
      <div class="modal-footer" style = 'background:#444;border-top:none;'>
        <button type="button" class="hero-shot-btn testimonial-btn" data-dismiss="modal">Close</button>
        {!! Form::submit('Send', array('class' => 'hero-shot-btn testimonial-btn', 'id' => 'submit-quote-btn')) !!}
      </div>
    </div>
  </div>
</div>
