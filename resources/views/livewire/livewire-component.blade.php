<div>
    <h3 class="text-center">Question 1: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question1 as $question)
            <tr>
                <th>{{$question['Agr_Nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3 class="text-center">Question 2: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question2 as $question)
            <tr>
                <th>{{$question['Par_Nom']}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3 class="text-center">Question 3: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Par_Nom</th>
            <th scope="col">Par_Lieu</th>
            <th scope="col">Par_Superficie</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question3 as $question)
            <tr>
                <th>{{$question["Par_Nom"]}}</th>
                <th>{{$question["Par_Lieu"]}}</th>
                <th>{{$question["Par_Superficie"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3 class="text-center">Question 4: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Par_Nom</th>
            <th scope="col">Agr_Nom</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question4 as $question)
            <tr>
                <th>{{$question["Par_Nom"]}}</th>
                <th>{{$question["Agr_Nom"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3 class="text-center">Question 5: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Int_Nb_Jours</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question5 as $question)
            <tr>
                <th>{{$question["Int_Nb_Jours"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3 class="text-center">Question 6: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Debut d'intervention</th>
            <th scope="col">le nom de la parcelle concernée</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question6 as $question)
            <tr>
                <th>{{$question["Int_Debut"]}}</th>
                <th>{{$question["Par_Nom"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h3 class="text-center">Question 7: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Debut d'intervention</th>
            <th scope="col">le nom de la parcelle concernée</th>
            <th scope="col">le nom de l’employé</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question7 as $question)
            <tr>
                <th>{{$question["Int_Debut"]}}</th>
                <th>{{$question["Par_Nom"]}}</th>
                <th>{{$question["Emp_Nom"]}}</th>

            </tr>
        @endforeach
        </tbody>
    </table>
    <h3 class="text-center">Question 8: </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">les interventions de l’employe Pernet</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question8 as $question)
            <tr>
                <th>{{$question["Int_Debut"]}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3 class="text-center">Question 9: </h3>
    <ul>

        <li><strong>La superficie totale des parcelles :{{$question9}} </strong></li>

    </ul>
    <h3 class="text-center">Question 10: </h3>
    <ul>

        <li><strong>Affichez le nom de la plus grande parcelle : </strong>{{$question10["Par_Nom"]}}</li>

    </ul>
    <h3 class="text-center">Question 11: </h3>
    <ul>

        <li><strong>Affichez le nom de la plus petite parcelle :</strong> {{$question11["Par_Nom"]}}</li>

    </ul>


</div>
