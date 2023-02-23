<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black">
    <main class="bg-white/30 h-[650px] w-[380px] rounded-3xl">
        <header class="flex
                       py-3
                       gap-5
                       bg-black/20
                       rounded-t-3xl">
            <a class="justify-left px-5" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 hover:scale-125 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>                                        
            </a>
            <h1 class="justify-center items-center text-3xl">02 - Construct</h1>
        </header>
        <section class="p-5 h-[570px] overflow-y-auto">
                 <?php
                    class Playlist {
                        // Attributes
                        private $name;
                        private $artist  = Array();
                        private $album   = Array();
                        private $cover   = Array();
                        private $year    = Array();

                        //methods
                        public function __construct($name){
                            $this->name = $name;
                        }

                        public function setPlaylist($artist, $album, $cover, $year){
                            $this->artist[] = $artist;
                            $this->album[]  = $album;
                            $this->cover[]  = $cover; 
                            $this->year[]   = $year;
                        }

                        public function getPlaylist(){
                            echo "<div class='p-2 mb-4 ring-1 ring-black/50 rounded-md bg-black/10'>
                                         <h2 class='text-center text-2xl my-4'><strong>$this->name </strong></h2>";
                                        for($i = 0; $i < count($this->artist); $i++){
                                            echo "<div class='p-2 mb-4 flex flex-col gap-4 ring-black/50 rounded-md bg-black/10'>
                                                <p><strong>".$this->album[$i]."</strong></p>
                                                <img src='".$this->cover[$i]."' alt='Cover' widt='280px'>
                                                <p>".$this->artist[$i]."</p>
                                                <p>".$this->year[$i]."</p>
                                            </div>";
                                        }
                                    "</div>";
                        }
                    }

                    $myPlaylist = new Playlist('Essentials');
                    $myPlaylist -> setPlaylist('Rammstein', 'Angst', 'https://tinyurl.com/3spea8rc', 2021);
                    $myPlaylist -> setPlaylist('Rammstein', 'Zick Zack', 'https://tinyurl.com/2p8b29jj', 2021);
                    $myPlaylist -> setPlaylist('Rammstein', 'Zeit', 'https://tinyurl.com/2h2c2xvx', 2021);
                    $myPlaylist -> setPlaylist('Rammstein', 'Du hast', 'https://tinyurl.com/3bftbejk', 2021);
                    $myPlaylist -> setPlaylist('Rammstein', 'Deutschland', 'https://tinyurl.com/2p8nrr9k', 2021);
                    $myPlaylist->getPlaylist();
                 ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>