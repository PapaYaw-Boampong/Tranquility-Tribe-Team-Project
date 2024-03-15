document.addEventListener("DOMContentLoaded", function() {
    const meditationContainer = document.getElementById("meditationContainer");

    // Sample data for meditation sessions
    const meditationSessions = [
        { title: "Meditation Session 1", description: "Deep Breathing Exercise", duration: "15 minutes", ratings: "4.5/5" },
        { title: "Meditation Session 2", description: "Yoga", duration: "20 minutes", ratings: "4.7/5" }
        // Add more sessions as needed
    ];

    // Function to create a meditation session element
    function createMeditationSession(session) {
        const sessionElement = document.createElement("section");
        sessionElement.classList.add("meditation-session");
        sessionElement.innerHTML = `
            <h2>${session.title}</h2>
            <p class="description">${session.description}</p>
            <p class="duration">Duration: ${session.duration}</p>
            <p class="ratings">User Ratings: ${session.ratings}</p>
            <button>Select</button>
        `;
        return sessionElement;
    }
    // Add each meditation session to the container
    meditationSessions.forEach(session => {
        const sessionElement = createMeditationSession(session);
        meditationContainer.appendChild(sessionElement);

        // Add click event listener to the select button
        const selectButton = sessionElement.querySelector("button");
        selectButton.addEventListener("click", function() {
            alert("You have selected " + session.title);
            // Perform further actions as needed
        });
    });
});