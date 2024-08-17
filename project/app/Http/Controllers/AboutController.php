<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function index()
    {
        $faqs = [
            'sk' => [
                ['question' => 'Ako mi viete pomôcť?', 'answer' => 'Moje služby zahŕňajú poskytovanie odborných rád a odporúčaní pri investovaní, výbere finančných produktov, ako sú úvery, hypotéky, poistenia a iné, ktoré sú na základe individuálnych potrieb a situácií klienta.'],
                ['question' => 'Prečo by som mal využiť Vaše služby?', 'answer' => 'Viem Vám pomôcť zorientovať sa v širokej ponuke finančných produktov, ušetriť Vám čas a často aj peniaze, nakoľko viem zosumarizovať informácie z finančného trhu a informovať Vás o najvýhodnejších možnostiach, ktoré sú aktuálne ponúkané na trhu a ktoré sú šité Vám na mieru.'],
                ['question' => 'Koľko stoja vaše služby?', 'answer' => 'Táto služba je pre klienta bezplatná. Ako sprostredkovateľ dostanem províziu z inštitúcie, od ktorej sa nakoniec vy rozhodnete daný produkt využiť.'],
                ['question' => 'Ako prebieha proces sprostredkovania finančného produktu?', 'answer' => 'Proces začína úvodným stretnutím alebo konzultáciou. Následne zanalyzujeme Vašu finančnú situáciu a potreby. Na základe analýzy Vám predstavím finančný plán s konkrétnymi možnosťami, ktoré sú vhodné pre Vás. Následne je to už len na Vás či chcete tento finančný plán začať realizovať alebo nie. Ak sa rozhodnete tento finančný plán zrealizovať, stávate sa mojím klientom a naša dlhodobá spolupráca len teraz začína.'],
                ['question' => 'Je finančné sprostredkovanie regulované zákonom?', 'answer' => 'Áno, finančné sprostredkovanie je v Slovenskej republike regulované zákonom. Všetci sprostredkovatelia musia byť registrovaní a licencovaní Národnou bankou Slovenska, ktorá vykonáva nad nimi dohľad pri dodržiavaní príslušných právnych noriem a etických štandardov.'],
                ['question' => 'Ako zistím, že ste dôveryhodný sprostredkovateľ?', 'answer' => 'Budem rád, ak sa rozhodnete si rezervovať nezáväznú konzultáciu a bude len na Vás či vo mňa vložíte dôveru. Veci ako registrácia v NBS a dohľadatelnosť sú samozrejmosťou.'],
                ['question' => 'Spolupracujete aj s právnickými osobami?', 'answer' => 'Áno, samozrejme.'],
                ['question' => 'Ako vás môžem kontaktovať?', 'answer' => 'Vyberiete si voľný termín na nezáväznú konzultáciu prostredníctvom rezervačného systému, ktorý je v sekcií kontakty.'],
            ],
            'en' => [
                ['question' => 'How can you help me?', 'answer' => 'My services include providing expert advice and recommendations for investments, choosing financial products such as loans, mortgages, insurance, and more, based on the individual needs and situations of the client.'],
                ['question' => 'Why should I use your services?', 'answer' => 'I can help you navigate the wide range of financial products, save you time, and often money, as I can summarize information from the financial market and inform you of the best options currently offered on the market, tailored to your needs.'],
                ['question' => 'How much do your services cost?', 'answer' => 'This service is free for the client. As a broker, I receive a commission from the institution from which you ultimately decide to use the product.'],
                ['question' => 'What is the process of financial product mediation?', 'answer' => 'The process starts with an initial meeting or consultation. Then we analyze your financial situation and needs. Based on the analysis, I will present a financial plan with specific options suitable for you. Then it is up to you whether you want to start implementing this financial plan or not. If you decide to implement this financial plan, you become my client, and our long-term cooperation just begins.'],
                ['question' => 'Is financial mediation regulated by law?', 'answer' => 'Yes, financial mediation is regulated by law in the Slovak Republic. All brokers must be registered and licensed by the National Bank of Slovakia, which supervises them in complying with the relevant legal norms and ethical standards.'],
                ['question' => 'How can I know you are a trustworthy broker?', 'answer' => 'I would be glad if you decide to book a non-binding consultation, and it will be up to you whether you put your trust in me. Things like registration with the NBS and traceability are a matter of course.'],
                ['question' => 'Do you also cooperate with legal entities?', 'answer' => 'Yes, of course.'],
                ['question' => 'How can I contact you?', 'answer' => 'You can choose a free appointment for a non-binding consultation through the reservation system, which is in the contacts section.'],
            ],
        ];

        return view('about.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
