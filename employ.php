
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="registration.css" rel="stylesheet" />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
  </head>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, Geneva, sans-serif;
      font-size: 14px;
      background: skyblue;
    }

    .wrapper {
      background-color: #fff;
      width: 500px;
      padding: 25px;
      margin: 50px auto 0;
      border-top: 5px solid skyblue;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    }

    .wrapper h2 {
      font-size: 24px;
      line-height: 24px;
      padding-bottom: 30px;
      text-align: center;
    }

    .input-name {
      width: 90%;
      position: relative;
      margin: 20px auto;
    }

    .lock {
      padding: 8px 11px;
    }

    .name {
      width: 45%;
      padding: 8px 0 8px 40px;
    }

    .input-name span {
      margin-left: 35px;
    }

    .text-name {
      width: 100%;
      padding: 8px 0 8px 40px;
    }

    .input-name i {
      position: absolute;
      font-size: 18px;
      border-right: 1px solid #cccccc;
    }

    .email {
      padding: 8px;
    }

    .text-name,
    .name {
      border: 1px solid #cccccc;
      outline: none;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .text-name:hover,
    .name:hover {
      background-color: #fafafa;
    }

    .text-name:focus,
    .name:focus {
      -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
      border: 1px solid skyblue;
      background: #fafafa;
    }

    .radio-button {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    .gender {
      margin-right: 1em;
    }

    .gender:before {
      content: "";
      display: inline-block;
      width: 0.5em;
      height: 0.5em;
      margin-right: 0.5em;
      border-radius: 100%;
      vertical-align: -3px;
      border: 2px solid #cccccc;
      padding: 0.15em;
      background-color: transparent;
      background-clip: content-box;
      transition: all 0.2s ease;
    }

    .radio-button:hover + .gender:before {
      border-color: #000;
    }

    .radio-button:checked + .gender:before {
      background-color: #000;
      border-color: #000;
    }

    .region {
      display: inline-block;
      width: 100%;
      height: 35px;
      padding: 0px 15px;
      cursor: pointer;
      color: #7b7b7b;
      border: 1px solid #cccccc;
      border-radius: 0;
      background: #fff;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: all 0.2s ease;
    }

    .region::-ms-expand {
      display: none;
    }

    .region:hover,
    .region:focus {
      color: #000;
      background: #fafafa;
      border-color: #000;
      outline: none;
    }

    .arrow {
      position: absolute;
      top: calc(50% - 4px);
      right: 15px;
      width: 0;
      height: 0;
      pointer-events: none;
      border-width: 8px 5px 0 5px;
      border-style: solid;
      border-color: #7b7b7b transparent transparent transparent;
    }

    .region:hover + .arrow,
    .region:focus + .arrow {
      border-top-color: #000;
    }

    @-webkit-keyframes check {
      0% {
        height: 0;
        width: 0;
      }

      25% {
        height: 0;
        width: 7px;
      }

      50% {
        height: 20px;
        width: 7px;
      }
    }

    @keyframes check {
      0% {
        height: 0;
        width: 0;
      }

      25% {
        height: 0;
        width: 7px;
      }

      50% {
        height: 20px;
        width: 7px;
      }
    }

    .button {
      background: skyblue;
      height: 35px;
      line-height: 35px;
      width: 100%;
      border: none;
      outline: none;
      cursor: pointer;
      color: #fff;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .button:hover {
      background-color: skyblue;
    }

    .button:hover {
      background-color: skyblue;
    }

    @media (max-width: 480px) {
      .wrapper {
        width: 100%;
      }

      .input-name {
        margin-bottom: -10px;
      }

      .name {
        width: 100%;
        padding: 8px 0 8px 40px;
        margin-bottom: 10px;
      }

      .input-name span {
        padding: 0;
        margin: 0;
      }
    }
  </style>

  <body>
    <div class="wrapper">
      <h2>Recrutment Form</h2>
      <div class="form-conteniar">
        <form action="insertRecr.php" method="POST">
          <div class="input-name">
         

          <div class="input-name">
            <input
              type="email"
              placeholder="Email"
              required
              class="text-name"
              name="email"
            />
          </div>

          <div class="input-name">
            <input
              type="password"
              placeholder="Password"
              required
              class="text-name"
              name="password"
            />
          </div>




          <div class="input-name">
            <input class="button" type="submit" value="Register" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
