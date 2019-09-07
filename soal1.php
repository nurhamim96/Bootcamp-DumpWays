<?php
function biodata(){
$name ="Ibad Nurhamim";
$address ="Jl. Menteng Atas Dalam No.30 Kel. Menteng Atas Kec. Setiabudi, Jakarta Selatan";
$hobbies =  array('Futsal','Badminton','Jogging');
$is_married = false;
$school = [
		'highSchool' => 'SMAN 2 Majalengka',
		'university' =>'Universitas Bina Sarana Informatika'
		];
$skill=[];
$skills =array(1 => 'PHP',3 =>'HTML',4 =>'Css',10 =>'ci');

	$skill[] = $skills;


$data =array();
$data['name']=$name;
$data['address']=$address;
$data['hobbies']=$hobbies;
$data['is_married']= $is_married;
$data['school']= $school;
$data['skills']= $skill;

return json_encode($data,JSON_PRETTY_PRINT);

}

echo biodata();

