{%- macro error_messages(message, type) %}
    {% if !is_array(message) %}
        {% set message = [message] %}
    {%endif %}
    {% for item in message %}
    <div class="alert alert-{{type}} alert-dismissible fade show mt-1" role="alert">
        {{ item }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    {% endfor %}
{%- endmacro %}