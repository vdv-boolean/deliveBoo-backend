<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {[
        $types = [ [
            "name"            => "Pizza",
            "description"     => "La pizza è un piatto iconico della cucina italiana, amata in tutto il mondo. Si tratta di una base di pasta lievitata, sottile e croccante nella versione classica, ma che può variare in spessore e consistenza. La base è tradizionalmente condita con salsa di pomodoro, che può essere aromatizzata con diverse erbe e spezie, e coperta con una generosa quantità di formaggio, solitamente mozzarella, che si fonde e crea una deliziosa copertura cremosa.",
            "img"             => "",
        ],
    
        [
            "name"            => "Pasta",
            "description"     => "La pasta è un alimento di base amato in tutto il mondo, particolarmente associato alla cucina italiana. È realizzata mescolando farina di grano con acqua (e talvolta uova) per creare una massa che può essere modellata in una varietà di forme. Dopo la cottura in acqua bollente salata, la pasta diventa tenera e al dente, pronta per essere condita in modi infiniti.",
            "img"             => "",
        ],
    
        [
            "name"            => "Dolci",
            "description"     => "I dolci sono prelibatezze dolci e deliziose che soddisfano il palato e portano gioia. Questi piaceri culinari sono spesso associati a momenti speciali e celebrativi. Sono realizzati utilizzando ingredienti come zucchero, farina, burro, uova e aromi come vaniglia e cioccolato. I dolci possono includere torte soffici e ricche, biscotti croccanti, pasticcini decorati, gelati freschi e molto altro. ",
            "img"             => "",
        ],
    
        [
            "name"            => "Giapponese",
            "description"     => "Il sushi è un piatto tradizionale giapponese noto per la sua armonia di sapori, texture e presentazione estetica. È composto principalmente da riso condito con aceto di riso, che funge da base, e può essere abbinato a vari ingredienti come pesce crudo, verdure, alghe marine",
            "img"             => "",
        ],
    
        [
            "name"            => "Cinese",
            "description"     => "La cucina cinese è una delle più antiche e influenti al mondo, con una storia che si estende per millenni. È caratterizzata da una vasta gamma di sapori, ingredienti e tecniche di cottura. La cucina cinese si basa sull'equilibrio tra i cinque sapori fondamentali: dolce, salato, acido, amaro e piccante. I principi di Yin e Yang sono spesso applicati per creare armonia nei piatti.",
            "img"             => "",
        ],
    
        [
            "name"            => "Indiano",
            "description"     => "La cucina indiana è ricca, variegata e profondamente radicata nella cultura e nella storia del subcontinente indiano. Caratterizzata da una vasta gamma di sapori, spezie e metodi di cottura, la cucina indiana è nota per la sua complessità e diversità regionale.",
            "img"             => "",
        ],
    
        [
            "name"            => "Coreano",
            "description"     => "La cucina coreana è un'espressione gustosa e distintiva della cultura del paese, caratterizzata da sapori audaci, ingredienti freschi e una varietà di piatti tradizionali. La cucina coreana si basa su una combinazione equilibrata di carboidrati, proteine e verdure, spesso accompagnati da una serie di piatti e contorni. ",
            "img"             => "",
        ],
    
        [
            "name"            => "Thailandese ",
            "description"     => "La cucina thailandese è rinomata per la sua combinazione unica di sapori contrastanti e l'uso creativo di ingredienti freschi e aromatici. Caratterizzata da un mix di dolce, salato, acido, piccante e amaro, la cucina thailandese offre una vasta gamma di piatti che riflettono la cultura e la geografia del paese.",
            "img"             => "",
        ],
    
        [
            "name"            => "Pollo",
            "description"     => "La cucina del pollo è estremamente versatile e popolare in tutto il mondo, grazie alla sua carne magra e alla capacità di adattarsi a una vasta gamma di preparazioni e sapori. Il pollo può essere cotto in molti modi diversi, rendendolo un ingrediente chiave in numerose cucine e piatti.",
            "img"             => "",
        ],
    
        [
            "name"            => "Kebab",
            "description"     => "Il kebab è un piatto tradizionale originario del Medio Oriente ma diffuso in tutto il mondo, noto per la sua semplicità, sapore e versatilità. Si tratta di carne (solitamente agnello, pollo, manzo o tacchino) marinata con spezie e aromi, infilzata in uno spiedo e poi cotta a fuoco diretto, spesso su una griglia o in un girarrosto verticale.",
            "img"             => "",
        ],
    
        [
            "name"            => "Panini",
            "description"     => "I panini conditi sono preparazioni in cui il pane è farcito con una varietà di ingredienti gustosi e condimenti per creare un piatto saporito e soddisfacente. Questi panini spesso presentano una combinazione di proteine, verdure, formaggi e salse per creare un equilibrio di sapori e consistenze.",
            "img"             => "",
        ],
    
        [
            "name"            => "Poke",
            "description"     => "Il poke è un piatto tradizionale hawaiano che ha guadagnato popolarità in tutto il mondo per la sua freschezza, sapore e presentazione artistica. Si tratta di un'insalata a base di pesce crudo tagliato a cubetti, spesso tonno o salmone, marinato con aromi e condimenti, e poi servito su una base di riso o insalata.",
            "img"             => "",
        ],
    
        [
            "name"            => "Fritti",
            "description"     => "La frittura è una tecnica di cottura in cui gli alimenti vengono immersi nell'olio caldo o grasso e cotti fino a diventare dorati e croccanti. Questa tecnica è ampiamente utilizzata in cucine di tutto il mondo per preparare una varietà di piatti che vanno dagli spuntini alle portate principali e agli antipasti. La frittura può avvenire in padella, friggitrice o wok.",
            "img"             => "",
        ],
    ],
            foreach ($type as $type) {
                Type::create($type);
            }
        }
    }

