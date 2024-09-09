<!DOCTYPE html>
<html>
<head>
  <title>Date Min Value Example</title>
</head>
<body>
  <h1>Date Min Value Example</h1>
  
  <label for="startDate">Start Date:</label>
  <input type="date" id="startDate" name="startDate">
  
  <label for="endDate">End Date:</label>
  <input type="date" id="endDate" name="endDate">
  
  <script>
    // Get the start and end date elements
    var startDateElement = document.getElementById("startDate");
    var endDateElement = document.getElementById("endDate");
    
    // Add an event listener to the start date element
    startDateElement.addEventListener("input", function() {
      // Set the minimum value of the end date element
      endDateElement.min = startDateElement.value;
    });
  </script>
</body>
</html>
