<div>
    <h3>Question 1: </h3>
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
    <h3>Question 2: </h3>
    <ul>
        @foreach($question2 as $quest2)
            <li>{{$quest2["Par_Nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 3: </h3>
    <ul>
        @foreach($question3 as $question)
            <li><strong>Nom:</strong> {{$question["Par_Nom"]}} <strong>Lieu:</strong> {{$question["Par_Lieu"]}} <strong>Superficie:</strong> {{$question["Par_Superficie"]}}</li>
        @endforeach
    </ul>
    <h3>Question 4: </h3>
    <ul>
        @foreach($question4 as $quest4)
            <li>{{$quest4["Par_Nom"]}} Agr_Nom: {{$quest4["Agr_Nom"]}}</li>
        @endforeach
    </ul>
    <h3>Question 5: </h3>
    <ul>
        @foreach($question5 as $quest5)
            <li> Nombre de jours: {{$quest5["Int_Nb_Jours"]}}</li>
        @endforeach
    </ul>
    <h3>Question 6: </h3>
    <ul>
        @foreach($question6 as $quest6)
            <li>Debut d'intervention {{$quest6['Int_Debut']}} le nom de la parcelle concernée: {{$quest6['Par_Nom']}}</li>
        @endforeach
    </ul>
    <h3>Question 7: </h3>
    <ul>
        @foreach($question7 as $quest7)
            <li>Debut d'intervention {{$quest6['Int_Debut']}} le nom de la parcelle concernée: {{$quest6['Par_Nom']}} le nom de
                l’employé: {{$quest6['Emp_Nom']}}</li>
        @endforeach
    </ul>


</div>
