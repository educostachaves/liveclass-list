<?php 

$app->get("/liveclass",function (){

	$arrayName = array(
		array(
			'Id' => 1,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A ciência metafísica das coisas",
	    	"Disciplines" => array(array( "Name" => "Fisica"),array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves"),array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 2,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "O que são voigais",
	    	"Disciplines" => array(array( "Name" => "Português")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 1,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A ciência metafísica das coisas",
	    	"Disciplines" => array(array( "Name" => "Fisica"),array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves"),array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 2,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "O que são voigais",
	    	"Disciplines" => array(array( "Name" => "Português")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 1,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A ciência metafísica das coisas",
	    	"Disciplines" => array(array( "Name" => "Fisica"),array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves"),array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 2,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "O que são voigais",
	    	"Disciplines" => array(array( "Name" => "Português")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0),
		array(
			'Id' => 3,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A arte de calcular de cabeça pra baixo",
	    	"Disciplines" => array(array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-03 17:30",
		    "Duration" => "1:30",
		    "IsFree" => 0,
		    "IsTrial" => 1,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0)
    );

	// $sql = "SELECT 
	// 	E1.Id,
	// 	E1.Name,
	// 	E1.Url,
	// 	E1.HomeworkUrl,
	// 	E1.ExtraContentUrl,
	// 	E1.Start,
	// 	E1.Duration,
	// 	R1.Name 'Teacher',
	// 	S1.Description 'Discipline', 
	// 	E1.IsFree,
	// 	E1.IsTrial, 
	// 	E1.Status
	// 	FROM Events E1
	// 	LEFT OUTER JOIN Events_Resources ER1 ON ER1.EventId = E1.Id
	// 	LEFT OUTER JOIN Resources R1 ON R1.Id = ER1.ResourceId
	// 	LEFT OUTER JOIN Events_Subjects ES1 ON ES1.EventId = E1.Id
	// 	LEFT OUTER JOIN Subjects S1 ON S1.Id = ES1.SubjectId
	// 	ORDER BY E1.start";

	// $stmt = DB::prepare($sql);
	// $stmt->execute();
	// formatJson($stmt->fetchAll());

	formatJson($arrayName);

});

$app->get("/liveclass/:id",function ($id){

	$arrayName = array(
		array(
			'Id' => 1,
			"Url" => "www.descomplica.com.br",
			"ChatUrl" => "chat.com/aula",
	    	"HomeworkUrl" => "blob.descomplica/homework.pdf",
	    	"Name" => "A ciência metafísica das coisas",
	    	"Disciplines" => array(array( "Name" => "Fisica"),array( "Name" => "Matematica")),
	    	"Teachers" => array(array( "Name" => "Eduardo Chaves"),array( "Name" => "Joilson Nascimento")),
		    "ExtraContentUrl" => "blob.descomplica/extracontent.pdf",
		    "Start" => "2015-06-15 12:00:00.000",
		    "Duration" => "01:00:00.000",
		    "IsFree" => false,
		    "IsTrial" => true,
		    "Tag" => "Especial Medicina",
		    "Route" => "especial-medicina",
		    "Status" => 0)
    );
	formatJson($arrayName);

});

$app->post("/liveclass/:id",function ($id){

	formatJson($stmt->fetchAll());

});

$app->delete("/liveclass/:id",function ($id){

	formatJson($stmt->fetchAll());

});



