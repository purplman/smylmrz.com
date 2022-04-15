import $ from "jquery";

$(() => {
    window.addEventListener("mousemove", (e) => {
        $(".custom-cursor--inner").css({
            visibility: "visible",
            transform: `translate(${e.x}px, ${e.y}px)`,
        });

        if ($(".trigger").is(e.target)) {
            const rect = e.target.getBoundingClientRect();
            $(".custom-cursor--outer")
                .css({
                    visibility: "visible",
                    transform: `translate(${rect.left}px, ${rect.top}px)`,
                })
                .addClass("hovering");
            $(".custom-cursor").addClass("hovering");
            return;
        }

        // Move the cursor center dot
        $(".custom-cursor--outer").css({
            visibility: "visible",
            transform: `translate(${e.x}px, ${e.y}px)`,
        });

        $(".custom-cursor").removeClass("hovering");
    });

    // Modal scripts

    // Open modal
    $(document).on("click", ".modal__trigger", (e) => {
        e.preventDefault();
        const target = $(e.target).data("target");
        $(`#${target}`).find(".modal").addClass("modal--active");
    });

    // Close modal
    $(document).on("click", ".modal__closer", function (e) {
        e.preventDefault();
        const target = $(this).data("target");
        $(`#${target}`).find(".modal").removeClass("modal--active");
    });
});
