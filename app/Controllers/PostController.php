<?php

namespace App\Controllers;

defined ('BASEPATH');

class PostController extends BaseController{

	public function ejercicio01()
	{
		$db = \Config\Database::connect();
		$posts = $db->query('select c.category, p.id, p.title, u.username, p.created_at 
		from categories as c right join posts as p on p.category = c.id 
		left join users as u on u.id = p.autor where p.created_at between "2023/01/01" and "2023/12/31"')->getResultArray();

		$data = [
			'posts' => $posts
		];

		return view('posts/ejercicio01', $data);
	}

	public function ejercicio02(){
		$db = \Config\Database::connect();
		$tablaP = $db->query('select p.autor, u.username, p.title, c.category 
		from posts as p inner join categories as c on p.id = c.id inner join users as u on u.id = p.id')->getResultArray();

		$data = [
			'tablaP' => $tablaP
		];
		return view('posts/ejercicio02', $data);
	}


	public function ejercicio05()
	{
		// 5. Mostrar una tabla con los siguientes datos: cantidad total de usuarios registrados, cantidad total de posts, cantidad total de comentarios, cantidad total de categorias.

		$db = \Config\Database::connect();

		$totalUsers = $db->query('select count(*) as "totalUsuarios" from users')->getResultArray();

		$totalPosts = $db->query('select count(*) as "totalPublicaciones" from posts')->getResultArray();
		
		$totalComments = $db->query('select count(*) as "totalComentarios" from comments')->getResultArray();

		$totalCategories = $db->query('select count(*) as "totalCategorias" from categories')->getResultArray();

		$data = [
			'totalUsers'		=> $totalUsers,
			'totalPosts'		=> $totalPosts,
			'totalComments'		=> $totalComments,
			'totalCategories'	=> $totalCategories
		];

		return view('posts/ejercicio05', $data);
	}


	public function ejercicio06()
	{
		$db = \Config\Database::connect();

		$postsPorCategoria = $db->query('select p.*, c.category as ccategory, count(*) as ppc from categories as c join posts as p on p.category = c.id group by category order by category')->getResultArray();

		$postsPorAutor = $db->query('select autor ID, count(autor) CantidasPost, "Autores" as Seccion from posts group by autor')->getResultArray();

		$data = [
			'postsPorCategoria' => $postsPorCategoria,
			'postsPorAutor' 	=> $postsPorAutor
		];

		return view('posts/ejercicio06', $data);
	}


	public function ejercicio07()
	{
		$db = \Config\Database::connect();

		$postsEscritosPorMujeres2022 = $db->query('select p.*, count(*) as pepm22, u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender = "f" and p.created_at between "2022/01/01" and "2022/12/31"')->getResultArray();

		$postsEscritosPorMujeres2023 = $db->query('select p.*, count(*) as pepm23, u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender = "f" and p.created_at between "2023/01/01" and "2023/12/31"')->getResultArray();

		$postsEscritosPorHombres = $db->query('select p.*, count(*) as peph, u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender = "m" and p.created_at between "2022/01/01" and "2022/12/31"')->getResultArray();

		$postsEscritosPorMujeres2 = $db->query('select p.*, p.title as titulo, p.created_at as creado, u.*, ui.* from posts as p join users as u on p.autor = u.id join userinfo as ui on u.id = ui.id where ui.gender = "f" and p.created_at between "2022/01/01" and "2022/12/31" order by creado ASC')->getResultArray();

		$data = [
			'postsEscritosPorMujeres2022'	=> $postsEscritosPorMujeres2022,
			'postsEscritosPorMujeres2023'	=> $postsEscritosPorMujeres2023,
			'postsEscritosPorMujeres2'		=> $postsEscritosPorMujeres2,
			'postsEscritosPorHombres'		=> $postsEscritosPorHombres,
		];

		return view('posts/ejercicio07', $data);
	}


	public function ejercicio08(){
		$db = \Config\Database::connect();
	
		$resumen1 = $db->query('select p.*, c.category as ccategory, count(*) as ppc from categories as c join posts as p on p.category = c.id group by category order by category')->getResultArray();

		$resumen2 = $db->query('select autor ID, count(autor) CantidasPost, "Autores" as Seccion from posts group by autor')->getResultArray();

		$data = [
			'resumen1' 	=> $resumen1,
			'resumen2' 	=> $resumen2
		];

		return view('posts/ejercicio08', $data);
	}
	
	public function ejercicio09(){
		$db = \Config\Database::connect();
		$postDeAdmin = $db->query(' select p.title, p.content, c.category from posts as p
		inner join categories as c on c.id = p.category
		inner join users as u on u.id =p.autor
		inner join profiles as po on po.id= u.profile
		where po.id = "1" and po.status = "1"')->getResultArray();

		$data = [
			'postDeAdmin' => $postDeAdmin,
		];

		return view('posts/ejercicio09', $data);
	}
	public function ejercicio10(){
		$db = \Config\Database::connect();
		$pem30 = $db->query(' select x.title, MAX(x.created_at) as t, x.gender, x.años, x.autor from( select p.id, p.title, p.created_at, ui.gender, TIMESTAMPDIFF(YEAR, ui.birthday, CURDATE()) as años, p.autor from posts as p
		inner join users as u on u.id = p.autor
		inner join userinfo as ui on ui.id = u.id) as x
		where x.gender = "f" and x.años < 30  
		group by x.gender, x.autor')->getResultArray();

		$peh16 = $db->query('select x.title, MIN(x.created_at) as t,x.gender, x.años, x.autor from(select p.id, p.title, p.created_at, ui.gender, TIMESTAMPDIFF(YEAR, ui.birthday, CURDATE()) as años,p.autor from posts as p
		inner join users as u on u.id =p.autor
		inner join userinfo as ui on ui.id = u.id) as x
		where x.gender = "m" and x.años > 16  
		group by x.gender,x.autor')->getResultArray();
		$data = [
			'pem30' => $pem30,
			'peh16'	=> $peh16
		];

		return view('posts/ejercicio10', $data);
	}
	
}

