{%- macro error_messages(message, type) %}
    <div class="alert alert-{{type}} alert-dismissible fade show mt-1" role="alert">
        {{ message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
{%- endmacro %}