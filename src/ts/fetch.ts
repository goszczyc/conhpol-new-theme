declare let adminUrl: any;

const fetch_init = async (data) => {
    console.log("test");
    let response = await fetch(adminUrl.ajaxurl, {
        method: "POST",
        body: data,
        credentials: "same-origin",
    });

    if (!response.ok) throw new Error("Ajax failed");
    const jsonRes = await response.json();

    return jsonRes;
};

export default fetch_init;
