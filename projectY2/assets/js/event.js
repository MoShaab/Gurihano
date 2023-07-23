
  // Add event listeners to thumbnail images
  const thumbnails = document.querySelectorAll('.thumbnail');
  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', handleThumbnailClick);
  });

  // Event handler function
  function handleThumbnailClick(event) {
    // Retrieve the room ID from the clicked thumbnail
    const roomId = event.target.dataset.roomId;
    
    // Perform an action with the room ID
    // Example: display more details in a modal
    displayModal(roomId);
  }

  function displayModal(roomId) {
    // Your code to display the modal or perform other actions with the room ID
    console.log(`Room ID: ${roomId}`);
  }
