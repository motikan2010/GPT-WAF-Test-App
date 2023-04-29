# GPT-WAF Test Application

## Using

**Docker must be running.**

1. Clone repository.
```
$ git clone git@github.com:motikan2010/GPT-WAF-Test-App.git
```

2. Edit the ".env" file.
```
$ cd GPT-WAF-Test-App/src

$ cp .env.example .env

$ vim .env
(...snip...)
GPT_WAF_ENABLED=true
GPT_WAF_OPEN_AI_API_KEY=<OpenAI_API_KEY>
GPT_WAF_DEBUG_MODE=true
```

3. Run application.
```
$ make up
```
