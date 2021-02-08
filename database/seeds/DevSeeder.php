<?php

use Illuminate\Database\Seeder;
use App\Models\ModelDev;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelDev $dev)
    {
        
        $dev->create([
            'nome'          =>'Antonio Davila',
            'email'         =>'antdv@gmail.com',
            'dNasc'         =>'1991-05-12',
            'Url_linkedin'  =>'www.linkedin/in/Antonio',
            'idade'         =>'21',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Renato Davila',
            'email'         =>'renato@gmail.com',
            'dNasc'         =>'1974-05-10',
            'Url_linkedin'  =>'www.linkedin/in/Renatoo',
            'idade'         =>'46',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Juliana Cabral',
            'email'         =>'juli@gmail.com',
            'dNasc'         =>'1981-09-12',
            'Url_linkedin'  =>'www.linkedin/in/Juliana',
            'idade'         =>'19',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Wellingtom Veiga',
            'email'         =>'wellv@gmail.com',
            'dNasc'         =>'1979-12-12',
            'Url_linkedin'  =>'www.linkedin/in/Wellington',
            'idade'         =>'22',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Heitor Viana',
            'email'         =>'heitor@gmail.com',
            'dNasc'         =>'1969-05-02',
            'Url_linkedin'  =>'www.linkedin/in/heitor',
            'idade'         =>'50',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Carlos Lima',
            'email'         =>'carlosl@gmail.com',
            'dNasc'         =>'1987-01-01',
            'Url_linkedin'  =>'www.linkedin/in/carloLima',
            'idade'         =>'33',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Rafael Gomes',
            'email'         =>'rafag@gmail.com',
            'dNasc'         =>'1985-05-12',
            'Url_linkedin'  =>'www.linkedin/in/Rafa-Gomes',
            'idade'         =>'35',
            'tecnologias'   =>'C#,PHP',
        ]);
        
        $dev->create([
            'nome'          =>'Keyla Braga',
            'email'         =>'keybrag@gmail.com',
            'dNasc'         =>'1986-05-12',
            'Url_linkedin'  =>'www.linkedin/in/key-Brag',
            'idade'         =>'34',
            'tecnologias'   =>'C#,PHP',
        ]);
        
    }
}
