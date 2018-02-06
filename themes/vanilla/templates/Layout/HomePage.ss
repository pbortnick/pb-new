

<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div id="owl-demo" class="owl-carousel owl-theme">
      <% if $HomePageSlides %>
          <% loop $HomePageSlides %>
            <% if $Image %>
            <div>
              <div class="item">
              $Image
              </div>
            <% end_if %>
            <% if $Title %>
              <div>
                <h2>$Title</h2>
              </div>
            </div>
            <% end_if %>
          <% end_loop %>
      <% end_if %>
    </div>
  </article>
</div>
