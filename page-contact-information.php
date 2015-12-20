<?php get_header(); ?>






<div class="ak-container">
    <h2>Address</h2>
    
    <div id="contactaddress">
        <p>225 N. Muhlenberg Street,</p>
        <p>Woodstock, VA 22664 Tel: 540-459-4212</p>
        <p>Fax: 540.459.2361</p>
    </div>
    <!--
    <div id="contactmap" style="width:48%;display:inline-block;">
        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=New+Orleans,+LA,+United+States&amp;aq=0&amp;oq=new+orlean&amp;sll=37.0625,-95.677068&amp;sspn=57.684464,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=New+Orleans,+Orleans,+Louisiana&amp;t=m&amp;ll=29.906139,-90.301437&amp;spn=0.208325,0.422287&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=New+Orleans,+LA,+United+States&amp;aq=0&amp;oq=new+orlean&amp;sll=37.0625,-95.677068&amp;sspn=57.684464,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=New+Orleans,+Orleans,+Louisiana&amp;t=m&amp;ll=29.906139,-90.301437&amp;spn=0.208325,0.422287&amp;z=11" style="color:#0000FF;text-align:left">Larger Map</a></small>
    </div>
    -->
        
<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
                //$emailTo = "eskinderget@gmail.com";
		$subject = 'Tri Sigma '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
        else
        {
            echo "<p style='color:red;'>Error sending mail</p>";
        }

} ?>
    
    
    
    
    
    <div id="contactdiv">
        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
            <table style="border:none; width:100%;">

                <tr>
                    
                
                    <td style=" border-bottom: 1px solid #DEDEDE; border-top: 1px solid #DEDEDE;">
                        
                        <input style="width:100%;padding: 6px;height: 46px;border:none;" 
                               placeholder="Name" required type="text" name="contactName" id="contactName" value="" />
                    </td>
                </tr>
                    <tr>
                        
                        <td style=" border-bottom: 1px solid #DEDEDE;">
                            
                            <input required placeholder="Email" 
                                   style="width:100%;padding: 6px; height:46px; border:none;" 
                                   type="email" name="email" id="email" value="" />
                        </td>
                    </tr>
                    <tr>
                        
                        <td style=" border-bottom: 1px solid #DEDEDE;">
                            
                            <textarea required placeholder="Message" 
                                      style="width:100%;padding:10px;border:none;" 
                                      name="comments" id="commentsText" rows="20" cols="30"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">
                            <button type="submit">Send email</button>
                        </td>
                    </tr>

            </table>
            <input type="hidden" name="submitted" id="submitted" value="true" />
        </form>
        
        <style>
            #contactdiv table td
            {
                border:none;
                padding:3px;
            }
        </style>
        
    </div>
    
    

</div>






<?php get_footer(); ?>