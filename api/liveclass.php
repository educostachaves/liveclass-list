<?php 

$app->get("/liveclass",function (){

	$sql = "SELECT * FROM Event";
	$stmt = DB::prepare($sql);
	$stmt->execute();
	formatJson($stmt->fetchAll());

});

$app->get("/liveclass/:id",function ($id){

	formatJson($stmt->fetchAll());

});

$app->post("/liveclass/:id",function ($id){

	formatJson($stmt->fetchAll());

});

$app->delete("/liveclass/:id",function ($id){

	formatJson($stmt->fetchAll());

});



