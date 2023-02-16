<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - class</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black">
    <main class="bg-white/30 h-[650px] w-[380px] rounded-3xl">
        <header class="flex
                       py-3
                       gap-10
                       bg-black/20
                       rounded-t-3xl">
            <a class="justify-left px-5" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 hover:scale-125 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>                                        
            </a>
            <h1 class="justify-center items-center px-3 text-3xl">01 - class</h1>
        </header>
        <section class="p-5 h-[570px] overflow-y-auto">
            <?php
                class Vehicle{
                    // Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    // Methods
                    public function setAttributes($brand, $refer, $model, $color){
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }

                    public function getAttributes(){
                        return "<div class='p-4 mb-4 flex-col ring-1 ring-black/50 rounded-md bg-black/10'>
                                    <p><strong>Brand: </strong>     $this->brand</p>
                                    <p><strong>Reference: </strong> $this->refer</p>
                                    <p><strong>Model: </strong>     $this->model</p>
                                    <p><strong>Color: </strong>     $this->color</p>
                                </div>";
                    }
                }

                $vehicle1 = new Vehicle;
                $vehicle1->setAttributes('Volkswagen', 'Tiguan', 2023, 'Black');
                echo $vehicle1->getAttributes();
                $vehicle2 = new Vehicle;
                $vehicle2->setAttributes('Toyota', 'Fortuner', 2020, 'Gray');
                echo $vehicle2->getAttributes();
                $vehicle3 = new Vehicle;
                $vehicle3->setAttributes('Koenigsegg', 'Jesko', 2020, 'White');
                echo $vehicle3->getAttributes();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>