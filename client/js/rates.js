document.addEventListener("DOMContentLoaded", function () {
    const rooms = [
        {
            name: "Twin Bed",
            pax: "3 Complimentary Breakfast/ Good for 3pax",
            amenities: [
                "Fully air-conditioned",
                "LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        },
        {
            name: "Twin Single Bed",
            pax: "Good for 2pax",
            amenities: [
                "Fully air-conditioned",
                "LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        },
        {
            name: "Queen Size Bed Room",
            pax: "Good for 2pax",
            amenities: [
                "Fully air-conditioned",
                "TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi",
                "Bathroom"
            ]
        },
        {
            name: "Queen Size Bedroom",
            pax: "Good for 2pax",
            amenities: [
                "Fully air-conditioned",
                "32\" LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi",
                "Bathroom"
            ]
        },
        {
            name: "Family Room A",
            pax: "5 Complimentary Breakfast/ Good for 5pax",
            amenities: [
                "Fully air-conditioned",
                "40\" LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        },
        {
            name: "Family Room B",
            pax: "7 Complimentary Breakfast/ Good for 7pax",
            amenities: [
                "Fully air-conditioned",
                "LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        },
        {
            name: "Double Deck Bed",
            pax: "Good for 3pax",
            amenities: [
                "Fully air-conditioned",
                "32\" LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        },
        {
            name: "Single Room",
            pax: "Good for 1pax",
            amenities: [
                "Fully air-conditioned",
                "32\" LED TV with CABLE",
                "Hot and Cold Shower",
                "Intercom",
                "Free Wi-Fi"
            ]
        }
    ];



    const pricingContainer = document.getElementById("pricing-container");

    for (const room of rooms) {
        const pricingCard = document.createElement("div");
        pricingCard.classList.add("pricing-card");

        const desc = document.createElement("div");
        desc.classList.add("desc");

        const roomName = document.createElement("div");
        roomName.classList.add("name");
        roomName.textContent = room.name;

        const pax = document.createElement("p");
        pax.textContent = "Pax: " + room.pax;

        const amenitiesTitle = document.createElement("div");
        amenitiesTitle.classList.add("name");
        amenitiesTitle.textContent = "Amenities:";

        const amenitiesList = document.createElement("ul");
        amenitiesList.classList.add("list-unstyled", "list");

        for (const amenity of room.amenities) {
            const amenityItem = document.createElement("li");
            amenityItem.innerHTML = `<i class="ti-check"></i> ${amenity}`;
            amenitiesList.appendChild(amenityItem);
        }

        desc.appendChild(roomName);
        desc.appendChild(pax);
        desc.appendChild(amenitiesTitle);
        desc.appendChild(amenitiesList);

        pricingCard.appendChild(desc);

        pricingContainer.appendChild(pricingCard);
    }
});
