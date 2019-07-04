
<div class="row">
    @foreach($show_fields as $panelName => $panel)
        {{ Html::section($language_file,$panelName) }}


        @foreach($panel as $fieldName => $options)
            {{
                Html::renderField($entity,$fieldName,$options,$language_file)
            }}
        @endforeach

    @endforeach

    @include('core::crud.partial.entity_created_at')

</div>


