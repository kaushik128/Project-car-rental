
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        
</head>
<body>
    
    
	<style type="text/css">
    background-image:url("1140-car-rental-app.jpeg");
    background-size:auto;
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
    <h1>This is the index page for Contact Us feature</h1>
    <br>
    
    <div id="box">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Leave a message,We appreciate your feedback<br>
                    <br>
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 66,Mohakhli,Dhaka <br><br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Our Official Hotline:- +88012345678910<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: md.shajib.hossian@g.bracu.ac.bd<br>
                </div>
                <p>New to Dhaka? Drop Your Details and Leave it on us We'll Revert</p>
                <form action="action_page.php" method="POST">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="e_mail">
                        </div>
                    </div>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
              </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>    
