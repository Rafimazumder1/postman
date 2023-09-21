<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multi-step Form</title>
  <link rel="stylesheet" href="css/ss.css">
</head>
<body>
  <h1>Multi-step Form</h1>
  <form action="submit.php" method="post">
    <fieldset>
      <legend>Sender Information</legend>
      <label for="sender-name">Name</label>
      <input type="text" name="sender-name" id="sender-name">
      <label for="sender-email">Email</label>
      <input type="email" name="sender-email" id="sender-email">
      <label for="sender-address">Address</label>
      <input type="text" name="sender-address" id="sender-address">
    </fieldset>
    <fieldset>
      <legend>Parcel Information</legend>
      <label for="parcel-weight">Weight</label>
      <input type="number" name="parcel-weight" id="parcel-weight">
      <label for="parcel-dimensions">Dimensions</label>
      <input type="text" name="parcel-dimensions" id="parcel-dimensions">
      <label for="parcel-contents">Contents</label>
      <input type="text" name="parcel-contents" id="parcel-contents">
    </fieldset>
    <fieldset>
      <legend>Receiver Information</legend>
      <label for="receiver-name">Name</label>
      <input type="text" name="receiver-name" id="receiver-name">
      <label for="receiver-email">Email</label>
      <input type="email" name="receiver-email" id="receiver-email">
      <label for="receiver-address">Address</label>
      <input type="text" name="receiver-address" id="receiver-address">
    </fieldset>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
