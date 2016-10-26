<?php

use App\Noticia;
use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noticia = new Noticia;
        $noticia->user_id = 1;
        $noticia->titulo = 'Santa Marta adjudica obras de tres estadios para los Bolivarianos';
        $noticia->resumen = 'El de fútbol debe ser construido en 12 meses. La construcción de los de béisbol y softbol tardará 10 meses...';
        $noticia->contenido = 'El de fútbol debe ser construido en 12 meses. La construcción de los de béisbol y softbol tardará 10 meses. Un paso que despeja la incertidumbre sobre los XVIII Juegos Deportivos Bolivarianos 2017, a realizarse aquí, fue dado en las últimas horas al otorgarse las licitaciones para los estadios de fútbol, béisbol y softbol.  A través de la Gerencia de Proyectos de Infraestructura fue adjudicado, mediante el proceso de selección abreviada de menor cuantía, el contrato para la construcción del estadio de fútbol. La ganadora fue el Consorcio Deportivo de Santa Marta. El escenario fue duda para los samarios luego de que la licitación se declara desierta en dos ocasiones.  La adjudicación la hicieron luego de que el proponente acogiera las sugerencias que hizo el Comité Evaluador y realizara los correctivos jurídicos, técnicos y financieros.  El estadio tiene un valor de $52.449 millones. Estará ubicada en el sector de Bureche y tendrá capacidad para 15.320 espectadores. Su construcción se hará en 12 meses.  La construcción de los estadios de béisbol y softbol, en la denominada Villa Olímpica, fue adjudicad a la Unión Temporal Estadios 2017.  El de béisbol tendrá capacidad para 1.374 aficionados, la inversión será de $12.140 millones y su construcción se hará en 10 meses, contados a partir del 17 de octubre, establecido como fecha de inicio. El estadio de softbol tendrá capacidad para 1.253 personas y las obras también deben iniciarse el día señalado. Deben edificarlo en 10 meses.  “Ahora si se le ve cara a los Juegos Bolivarianos”, dijo el dirigente comunal y deportivo, Augusto Acosta.  El alcalde de Santa Marta, Rafael Martínez, dijo, en el caso del estadio de fútbol, que espera que después de la formalización del contrato inicien las obras. Eso debe suceder en 15 días. “Esto, sin lugar a dudas, es un alivio, pues habíamos quedado preocupados por las observaciones que hizo el Comité Evaluador y mucho más al solicitar que se declarara nuevamente desierta la licitación en el caso de que los proponentes no hicieran las correcciones normativas”, anotó.  Indicó Martínez que en el transcurso de la presente semana publicarán en la página del Secop la adjudicación de los coliseos Mayor y Menor, el estadio para Rugby y el Parque Acuático.';
        $noticia->imagen = 'http://www.elheraldo.co/sites/default/files/styles/detalle_articulo/public/2016/10/04/articulo/regionales_estadio_de_beisbol_santa_marta.jpg?itok=lryCF0Pq';
        $noticia->video = '';
        $noticia->save();

        $noticia = new Noticia;
        $noticia->user_id = 2;
        $noticia->titulo = 'Santa Marta Bolivarianos';
        $noticia->resumen = 'Noticias acerca de ';
        $noticia->contenido = 'este es un contenido';
        $noticia->imagen = '';
        $noticia->video = '';
        $noticia->save();

    }
}
