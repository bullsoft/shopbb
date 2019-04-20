<!DOCTYPE html>
<html lang="en">
{% include "layouts/head.volt" %}

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            {% include "layouts/nav.volt" %}
            {% if showSider %}
            {% include "layouts/sidebar.volt" %}
            {% endif %}
            <div class="main-content"{% if !showSider %} style="padding-left: 30px"{% endif %}>
                <section class="section">
                    <h1 class="section-header">
                        <div>{{title}}</div>
                    </h1>
                    <div class="section-body"></div>
                    {{content()}}
                </section>
            </div>
            {% include "layouts/footer.volt" %}
        </div>
    </div>
    {% include "layouts/foot.volt" %}
</body>

</html>