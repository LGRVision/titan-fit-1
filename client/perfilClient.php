<?php
include '../db.php';

// Verifique se o usuário está autenticado, caso contrário, redirecione para a página de login
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header('Location: ../login.php');
//     exit();
// }

// // Pegue o ID do usuário autenticado
// $user_id = $_SESSION['user_id'];

// Consulta ao banco de dados para obter as informações do usuário
// $query = "SELECT usuario, email FROM usuarios WHERE id = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param("i", $user_id);
// $stmt->execute();
// $stmt->bind_result($usuario, $email);
// $stmt->fetch();
// $stmt->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - Titan Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <!-- Logo and Menu toggle button -->
                <div class="block sm:hidden">
                    <button id="navbar-toggle" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
                <!-- Navbar Links -->
                <div id="navbar-menu" class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="homeClient.php" class=" text-gray-900 inline-flex items-center px-1 pt-1 text-3xl font-serif hover:border-red-500 hover:shadow-md border-b-2 border-transparent">Titan Fit</a>
                    <a href="#conheca" class="border-transparent hover:border-red-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Nos Conheca</a>
                    <a href="../contato.php" class="border-transparent hover:border-red-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contato</a>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center">
                <a href="./perfilClient.php" class=" text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-serif hover:border-red-500 hover:shadow-md border-b-2 border-transparent">Meu Perfil</a>
                    <a href="../logout.php" class="border-transparent text-gray-900 hover:border-red-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Sair</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="max-w-3xl mx-auto my-10 bg-white p-5 rounded-lg shadow-md">
        <div class="flex items-center space-x-4">
            <!-- Foto de perfil -->
            <div>
                    <img src="../assets/imgs/maria.jpg" alt="Foto de Perfil" class="w-24 h-24 rounded-full shadow">
                
            </div>
            <!-- Informações do usuário -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-700">Usuario</h1>
                <p class="text-gray-500"></p>
            </div>
        </div>
        <div class="mt-6">
            <a href="" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">Editar Perfil</a>
        </div>
    </div>
</body>
</html>
