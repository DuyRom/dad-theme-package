<div class="table-responsive">
    <table {{$attributes->merge(['class'=>'table'])}}>
        <thead class="thead-dark">
            {{$thead ?? NULL}}
        </thead>
        <tbody>
            {{$tbody ?? NULL}}
        </tbody>
    </table>
</div>