<!DOCTYPE html>
<html>
    {% include "layouts/head.volt" %}
    <body>
        {% include "layouts/header.volt" %}
        <main>            
            {{ content() }}
        </main>
        {% include "layouts/footer.volt" %}
        {% include "layouts/foot.volt" %}
    </body>
</html>