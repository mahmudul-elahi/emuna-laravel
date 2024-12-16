const input = document.querySelector("#tags");
const tagify = new Tagify(input, {
    enforceWhitelist: false,
    maxTags: 10,
    dropdown: {
        enabled: 0,
        maxItems: 5,
        position: "all"
    }
});

// Optional: Set default tags
tagify.addTags(["Park", "Mall"]);
