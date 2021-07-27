<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Whatsapp Message Send Using PHP</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header text-center bg-primary text-white text-uppercase">
							Send Message on Whatsapp using PHP
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<input type="text" name="mobile" placeholder="Enter Mobile Number"class="form-control">
								</div>
								<div class="form-group">
									<input type="text" name="message" placeholder="Write Message"class="form-control">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" name="submit" value="Send Message">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>
<?php 


	$qnt= '3000';
	$count= '120';
	$jumbo ='5';

	$vessel= 'PRETTY NELLY';
	$vessel_id ='1050';
	$vessel_qnt= '6000';
	$vessel_type= 'رمل';

	$car_no ='ط د م 1597';
	$sn = 'm14';
	$car_type = 'سيارة توكتوك';
	$car_owner = 'صقر';

	$time ='15:25';
	$avg = '25';
	
	$start_date ='2021-07-10 01:20:00';
	 $exit_date ='2021-07-13 16:37:00';
	$quay='25';
	
	$client ='اندستريمب';
	
		$count77 ='30' ;
        $qnts0='1000';
        $avg0='25';
	
	/*  first
	$message=' إجمالى الكمية الأن  '.$qnt. ' طن '.
							' لعدد '.$count.' نقلة ';
	$message.= "\r\n";
	$message .=' لعدد '.$jumbo.' جامبو .';
	$message.= "\r\n";
	$message.= 'اسم الباخرة : '.$vessel;
	$message.= "\r\n";
	$message.= ' الصنف : '.$vessel_type;
	$message.= "\r\n";
	$message.= ' الكمية : '.$vessel_qnt;
	$message.= "\r\n";
	$message.= 'https://marine-co.online/ops/shipping/public/token/all_report.php?vessel_id='.$vessel_id;

*/

/*second

	   $message1='  تم إضافة  '.$car_type
    .' رقم '.$car_no
	.' كود '.$sn.' '.$car_owner
	.'  إلى منظومة الشحن ';
	$message1.= "\r\n";
	$message1.= 'وقت الدخول : '.$start_date;
	$message1.= "\r\n";
	$message1.= 'اسم الباخرة : '.$vessel;
	$message1.= "\r\n";
	$message1.= ' الصنف : '.$vessel_type;
	$message1.= "\r\n";
	$message1.= ' الكمية : '.$vessel_qnt;
	$message1.= "\r\n";
	$message1.= ' الرصيف : '.$quay;
	
	
	
	$message2='تم إضافة '.$car_type. ' رقم '.$car_no.' كود '.$sn;
	$message2.= "\r\n";
	$message2 .=$car_owner.' إلى منظومة الشحن .';
	$message2.= "\r\n";
	$message2.= 'وقت الدخول : '.$start_date;
	$message2.= "\r\n";
	$message2.= 'اسم الباخرة : '.$vessel;
	$message2.= "\r\n";
	$message2.= ' الصنف : '.$vessel_type;
	$message2.= "\r\n";
	$message2.= ' الكمية : '.$vessel_qnt;
	$message2.= "\r\n";
	$message2.= ' الرصيف : '.$quay;
	$message2.= "\r\n";
	$message2.= ' العميل : '.$client;
	$message2.= "\r\n";
	$message2.= 'https://marine-co.online/ops/shipping/public/token/all_report.php?vessel_id='.$vessel_id;
*/
	 $message1=' تم خروج  '.$car_type
    .' رقم '.$car_no
	.' كود '.$sn.' '.$car_owner
	.'  من منظومة الشحن '.' بإجمالي  '.  $qnts0 . ' طن '
	. 'لعدد '  . $count77 .'  نقله  ' 
	. ' بمتوسط ' . $avg0 .' طن/نقله  .   ';
	$message1.= "\r\n";	
	$message1.= 'وقت الخروج : ' .$exit_date;
	$message1.= "\r\n";
	$message1.= 'وقت الدخول : '.$start_date;
    $message1.= "\r\n";
	$message1.= 'اسم الباخرة : '.$vessel;
	$message1.= "\r\n";
	$message1.= ' الصنف : '.$vessel_type;
	$message1.= "\r\n";
	$message1.= ' الكمية : '.$vessel_qnt;
	$message1.= "\r\n";
	$message1.= ' الرصيف : '.$quay;

	$message2 =' تم خروج '.$car_type. ' رقم '.$car_no.' كود '.$sn;
	$message2.= "\r\n";
	$message2.=$car_owner.' من منظومة الشحن ';
	$message2.= "\r\n";	
	$message2.= 'وقت الخروج : ' .$exit_date;
	$message2.= "\r\n";
	$message2.= 'وقت الدخول : '.$start_date;
	$message2.= "\r\n";
	$message2.= 'اسم الباخرة : '.$vessel;
	$message2.= "\r\n";
	$message2.= ' الصنف : '.$vessel_type;
	$message2.= "\r\n";
	$message2.= ' الكمية : '.$vessel_qnt;
	$message2.= "\r\n";
	$message2.= ' الرصيف : '.$quay;
	$message2.= "\r\n";
	$message2.= ' العميل : '.$client;
	$message2.= "\r\n";
	$message2.= 'https://marine-co.online/ops/shipping/public/token/all_report.php?vessel_id='.$vessel_id;
/**/
if(isset($_POST['submit']))
{
   $token ='98ft1fu1g5ab2h5p';
    $instance='instance302645';
	
	$data = [
	           "chatId" => "201094380861-1623837624@g.us",
                'body' => $message2, // Message
        ];
	$json = json_encode($data); // Encode data to JSON
	// URL for request POST /message
     $url = 'https://api.chat-api.com/'.$instance.'/message?token='.$token;
	// Make a POST request
	$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
	]);
	// Send a request
	$result = file_get_contents($url, false, $options);
	print_r($result);
}









