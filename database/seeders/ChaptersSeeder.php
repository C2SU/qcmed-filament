<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = $this->getChaptersData();
        
        foreach ($chapters as $chapter) {
            Chapter::create($chapter);
        }
        
        $this->command->info('✅ ' . count($chapters) . ' chapitres importés avec succès !');
    }
    
    private function getChaptersData(): array
    {
        return [
            ['numero' => '1', 'description' => 'La relation médecin-malade dans le cadre du colloque singulier ou au sein d\'une équipe, le cas échéant pluriprofessionnelle. La communication avec le patient et son entourage. L\'annonce d\'une maladie grave ou létale ou d\'un dommage associé aux soins. La formation du patient. La personnalisation de la prise en charge médicale.'],
            ['numero' => '2', 'description' => 'Les valeurs professionnelles du médecin et des autres professions de santé'],
            ['numero' => '3', 'description' => 'Le raisonnement et la décision en médecine. La médecine fondée sur les preuves (Evidence Based Medicine, EBM). La décision médicale partagée. La controverse.'],
            ['numero' => '4', 'description' => 'Qualité et sécurité des soins. La sécurité du patient. La gestion des risques. Les événements indésirables associés aux soins (EIAS). Démarche qualité et évaluation des pratiques professionnelles'],
            ['numero' => '5', 'description' => 'La gestion des erreurs et des plaintes ; l\'aléa thérapeutique'],
            ['numero' => '6', 'description' => 'L\'organisation de l\'exercice clinique et les méthodes qui permettent de sécuriser le parcours du patient'],
            ['numero' => '7', 'description' => 'Les droits individuels et collectifs du patient'],
            ['numero' => '8', 'description' => 'Nouvel item. Les discriminations'],
            ['numero' => '9', 'description' => 'Introduction à l\'éthique médicale'],
            ['numero' => '10', 'description' => 'Nouvel item. Approches transversales du corps'],
            ['numero' => '11', 'description' => 'Violences et santé.'],
            ['numero' => '12', 'description' => 'Nouvel item. Violences sexuelles'],
            ['numero' => '13', 'description' => 'Certificats médicaux. Décès et législation.'],
            ['numero' => '14', 'description' => 'Nouvel item. La mort'],
            ['numero' => '15', 'description' => 'Soins psychiatriques sans consentement'],
            ['numero' => '16', 'description' => 'Organisation du système de soins. Sa régulation. Les indicateurs. Parcours de soins.'],
            ['numero' => '17', 'description' => 'Nouvel item. Télémédecine, télésanté et téléservices en santé.'],
            ['numero' => '18', 'description' => 'Nouvel item. Santé et numérique'],
            ['numero' => '19', 'description' => 'La sécurité sociale. L\'assurance maladie. Les assurances complémentaires. La complémentaire santé solidaire (CSS). La consommation médicale. Protection sociale. Consommation médicale et économie de la santé.'],
            ['numero' => '20', 'description' => 'La méthodologie de la recherche en santé'],
            ['numero' => '21', 'description' => 'Mesure de l\'état de santé de la population'],
            ['numero' => '22', 'description' => 'Nouvel item. Maladies rares'],
            ['numero' => '23', 'description' => 'Grossesse normale'],
            ['numero' => '24', 'description' => 'Principales complications de la grossesse'],
            ['numero' => '25', 'description' => 'Grossesse extra-utérine'],
            ['numero' => '26', 'description' => 'Douleur abdominale aiguë chez une femme enceinte'],
            ['numero' => '27', 'description' => 'Prévention des risques fœtaux : infection, médicaments, toxiques, irradiation'],
            ['numero' => '28', 'description' => 'Connaître les particularités de l\'infection urinaire au cours de la grossesse'],
            ['numero' => '29', 'description' => 'Connaître les principaux risques professionnels pour la maternité, liés au travail de la mère.'],
            ['numero' => '30', 'description' => 'Prématurité et retard de croissance intra-utérin : facteurs de risque et prévention'],
            ['numero' => '31', 'description' => 'Accouchement, délivrance et suites de couches normales'],
            ['numero' => '32', 'description' => 'Évaluation et soins du nouveau-né à terme'],
            ['numero' => '33', 'description' => 'Allaitement maternel'],
            ['numero' => '34', 'description' => 'Suites de couches pathologiques : pathologie maternelle dans les 40 jours'],
            ['numero' => '35', 'description' => 'Anomalies du cycle menstruel. Métrorragies'],
            ['numero' => '36', 'description' => 'Contraception'],
            ['numero' => '37', 'description' => 'Interruption volontaire de grossesse'],
            ['numero' => '38', 'description' => 'Infertilité du couple : conduite de la première consultation'],
            ['numero' => '39', 'description' => 'Assistance médicale à la procréation : principaux aspects biologiques, médicaux et éthiques'],
            ['numero' => '40', 'description' => 'Algies pelviennes chez la femme'],
            ['numero' => '41', 'description' => 'Nouvel item. Endométriose'],
            ['numero' => '42', 'description' => 'Aménorrhée'],
            ['numero' => '43', 'description' => 'Hémorragie génitale chez la femme'],
            ['numero' => '44', 'description' => 'Tuméfaction pelvienne chez la femme'],
            ['numero' => '45', 'description' => 'Spécificités des maladies génétiques'],
            ['numero' => '46', 'description' => 'Nouvel item. Médecine génomique'],
            ['numero' => '47', 'description' => 'Suivi d\'un nourrisson, d\'un enfant et d\'un adolescent normal. Dépistage des anomalies orthopédiques, des troubles visuels, auditifs et dentaires. Examens de santé obligatoires. Médecine scolaire. Mortalité et morbidité infantiles.'],
            ['numero' => '48', 'description' => 'Alimentation et besoins nutritionnels du nourrisson et de l\'enfant'],
            ['numero' => '49', 'description' => 'Puberté normale et pathologique'],
            ['numero' => '50', 'description' => 'Pathologie génito-scrotale chez le garçon et chez l\'homme'],
        ];
    }
}
