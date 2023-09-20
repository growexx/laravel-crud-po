<head>
    <title>Welcome</title>
</head>
<body style="background-image: url('background.jpg');background-size: cover;">
<div class="wrapper d-flex align-items-stretch">
  @include('nav',['activePage' => 'welcome'])
  <div id="content" class="p-4 p-md-5">
    <h1 style="text-align: center;color: black;" class="mb-4"><strong><u>Welcome to Laravel Crud Operation</u></strong></h1>
    <br>
    <p>Catering to product management needs, our demo provides you with the ability to add, edit, or delete any details
      pertaining to products.<br> Whether you want to introduce new items, make updates, or remove outdated information,
      this platform gives you full control over your product data, ensuring it stays current and relevant experience.
    </p>
    <br>
    <p>
      List - To see the list of products
    </p>
    <p>
      New product - To create new product
    </p>
  </div>
</div>
</body>